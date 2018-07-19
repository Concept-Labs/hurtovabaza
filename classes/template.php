<?php
Class Template 
{
    private $registry;
    private $vars = array();
    private $__file = null;
    private $__css = array();
    private $__js = array();
    
    public function __construct($registry) 
    {
        $this->registry = $registry;
    }

    public function set($varname, $value, $overwrite=false) 
    {
        if (isset($this->vars[$varname]) == true AND $overwrite == false) 
        {
            trigger_error ('Unable to set var `' . $varname . '`. Already set, and overwrite not allowed.',
                E_USER_NOTICE);
            return false;
        }
        $this->vars[$varname] = $value;
        return true;
    }

    public function get($varname)
    {
        return $this->vars[$varname];
    }

    public function remove($varname) 
    {
        unset($this->vars[$varname]);
        return true;
    }

    public function setFile($file)
    {
        $this->__file = $file;
        return $this;
    }

    public function toHtml()
    {
        if(!$this->__file){
            die('Темплейт должен иметь файл');
        }
        $fullPath = site_path . $this->__file;
        $content = file_get_contents($fullPath);
        
        $this->_addHeadFiles();
        if(preg_match_all( '/({{\$([A-Za-z]+)}})/mi', $content, $matches)){
            $replacer = $matches[1];
            $params = $matches[2];
            foreach($params as $i => $param){
                if(isset($this->vars[$param])){
                    $content = str_replace($replacer[$i], $this->vars[$param], $content);
                }
            }
        }
        return $content;
    }
    
    public function toHtmlWithPhp()
    {
        if(!$this->__file){
            die('Темплейт должен иметь файл');
        }
        ob_start();
        $includeFilePath = realpath(site_path . $this->__file);
        include $includeFilePath;
        $html = ob_get_clean();
        if(preg_match_all( '/({{\$([A-Za-z]+)}})/mi', $html, $matches)){
            $replacer = $matches[1];
            $params = $matches[2];
            foreach($params as $i => $param){
                if(isset($this->vars[$param])){
                    $html = str_replace($replacer[$i], $this->vars[$param], $html);
                }
            }
        }
        return $html;
    }
    
    public function addCss($file)
    {
        $this->__css[$file] = $file;
    }
    
    public function addJs($file)
    {
        $this->__js[$file] = $file;
    }
    
    public function _addHeadFiles()
    {
        $css = '';
        foreach($this->__css as $file){
            $css .= '<link rel="stylesheet" type="text/css" href="'.base_url . $file.'" media="all"/>';
        }
        $js = '';
        foreach($this->__js as $file){
            $js .= '<script type="text/javascript" src="'.base_url . $file.'"></script>';
        }
        $this->vars['headfiles'] = $css.' '.$js;
        return $this;
    }
    
    public function getUrl($url)
    {
        return base_url . $url;
    }

    function page_table_query($table) {

        $db = $this->registry->get('db');

        $query= mysqli_query($db, "SELECT * FROM `name_baz`");
        $num = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);

        $query2= mysqli_query($db, "SELECT * FROM $table");
        $num2 = mysqli_num_rows($query);
        $row2 = mysqli_fetch_array($query);

        //код для редагування статті
        $id = isset($_GET['id']) ? $_GET['id'] : 0; 


        $res = mysqli_query($db, "   SELECT * FROM $table WHERE id='$id'");


        $roww = mysqli_fetch_array($res);

        if (isset($_POST['save'])) {
            $kod_tovar = $_POST['kod_tovar'];
            $name_tovar = strip_tags($_POST['name_tovar']);
            $bochka_tovar = $_POST['bochka_tovar'];
            $fish_tovar = $_POST['fish_tovar'];
            $gyrtovna_tovar = $_POST['gyrtovna_tovar'];
            $centr_tovar = $_POST['centr_tovar'];
            $bochka2_tovar = $_POST['bochka2_tovar'];
            $fish2_tovar = $_POST['fish2_tovar'];
            $gyrtovna2_tovar = $_POST['gyrtovna2_tovar'];
            $centr2_tovar = $_POST['centr2_tovar'];
            $dovtavutu = $bochka2_tovar + $fish2_tovar + $gyrtovna2_tovar + $centr2_tovar;
            echo $name_tovar;
            mysqli_query($db, "UPDATE `$table` SET `kod_tovar`='$kod_tovar',`name_tovar`='$name_tovar',`bochka_tovar`='$bochka_tovar',`fish_tovar`='$fish_tovar',`gyrtovna_tovar`='$gyrtovna_tovar',`centr_tovar`='$centr_tovar',`bochka2_tovar`='$bochka2_tovar',`fish2_tovar`='$fish2_tovar',`gyrtovna2_tovar`='$gyrtovna2_tovar',`centr2_tovar`='$centr2_tovar',`dostavka_tovar`='$dovtavutu' WHERE id='$id'");

            header("Location: /".$table);
            exit();
        }

//видалення статті
        if (isset($_GET['delete'])) {
            if (isset($_POST['delete_tovar'])) {
                if ($_POST['delete_tovar'] == 1) {
                    $delete = mysqli_query($db, "DELETE FROM `$table` WHERE id='$id'");
                } else {
                    header("Location: /".$table);
                    exit();
                }
            }

            

        }

        mysqli_close($db);

        ?>

        <?php 
        if (!isset($_GET['edit']) && !isset($_GET['delete'])) { ?>
        
        <div>
            <a href="#" class="plus" title="Додати таблицю"><i class="fas fa-table"></i></a>

            <div class="date">
                10 липня 2018  
            </div>
        </div>



        <div>
            <table>
                <tr class="table-top">
                    <td><?php echo $row['kod']; ?></td>
                    <td class="width-name"><?php echo $row['name']; ?></td>
                    <td><?php echo $row['bochka']; ?></td>
                    <td><?php echo $row['fish']; ?></td>
                    <td><?php echo $row['gyrtovna']; ?></td>
                    <td><?php echo $row['center']; ?></td>
                    <td><?php echo $row['bochka2']; ?></td>
                    <td><?php echo $row['fish2']; ?></td>
                    <td><?php echo $row['gyrtovna2']; ?></td>
                    <td><?php echo $row['center2']; ?></td>
                    <td><?php echo $row['dostavka']; ?></td>
                    <td><?php echo $row['dia']; ?></td>
                </tr>
                <?php if ($num2) {
                    while ($row = mysqli_fetch_array($query2)) { ?>
                    <tr>
                        <td><?php echo $row['kod_tovar']; ?></td>
                        <td class="width-name"><?php echo $row['name_tovar']; ?></td>
                        <td><?php echo $row['bochka_tovar']; ?></td>
                        <td><?php echo $row['fish_tovar']; ?></td>
                        <td><?php echo $row['gyrtovna_tovar']; ?></td>
                        <td><?php echo $row['centr_tovar']; ?></td>
                        <td><?php echo $row['bochka2_tovar']; ?></td>
                        <td><?php echo $row['fish2_tovar']; ?></td>
                        <td><?php echo $row['gyrtovna2_tovar']; ?></td>
                        <td><?php echo $row['centr2_tovar']; ?></td>
                        <td><?php echo $row['dostavka_tovar']; ?></td>
                        <td> <a href="<?php echo base_url .$table .'?edit&id='.$row['id']; ?>" class="edit" title="Редагувати"> <i class="fas fa-pen"></i></a> <a href="#win1" class="delete" title="Видалити"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php } } ?>
                </table>
                <a href="<?php echo "/add?" .$table; ?>" class="add-tovar" title="Додати рядок"><i class="fas fa-plus"></a>
                </div>
                 <a href="#x" class="overlay" id="win1"></a>
                   <div class="popup">
                       <?php if (!isset($delete)) {?>
                        <div>
                        <form action="<?php echo base_url .$table .'?delete&id='.$roww['id']; ?>" method="post">
                                Ви дійсно хочете <span style="color: red;">видалити</span>  товар!!!<br/><br/>

                                <button type="submit" class="confirmation-btn" name="delete_tovar" value="1">Так</button>
                                <button type="submit" class="confirmation-btn" name="delete_tovar" value="0">Ні</button>
                            </form>
                        </div>
                        <?php  } else {
                            echo "<div style='color: green;'>Товар успішно видалено!</div>";
                        }?>
                    <a class="close"title="Закрыть" href="#close"></a>
                    </div>

                <?php
            } else { 
                if (isset($_GET['edit'])) {
                    ?>
                    <div>
                        <form action="<?php echo base_url .$table .'?edit&id='.$roww['id']; ?>" method="post">
                            <table class="add-table">
                                <tr class="table-top">
                                    <td>Код</td>
                                    <td class="width-name">Назва</td>
                                    <td>Бочка</td>
                                    <td>Рибний турмінал</td>
                                    <td>Гуртовня</td>
                                    <td>Центр</td>
                                    <td>Бочка</td>
                                    <td>Рибний термінал</td>
                                    <td>Гуртовня</td>
                                    <td>Центр</td>
                                </tr>
                                <tr>
                                    <td> <input type="number" name="kod_tovar" value="<?php echo $roww['kod_tovar']; ?>"> </td>
                                    <td> <input type="text" name="name_tovar" value="<?php echo $roww['name_tovar']; ?>"> </td>
                                    <td> <input type="number" name="bochka_tovar" value="<?php echo $roww['bochka_tovar']; ?>"> </td>
                                    <td> <input type="number" name="fish_tovar" value="<?php echo $roww['fish_tovar']; ?>"> </td>
                                    <td> <input type="number" name="gyrtovna_tovar" value="<?php echo $roww['gyrtovna_tovar']; ?>"> </td>
                                    <td> <input type="number" name="centr_tovar" value="<?php echo $roww['centr_tovar']; ?>"> </td>
                                    <td> <input type="number" name="bochka2_tovar" value="<?php echo $roww['bochka2_tovar']; ?>"> </td>
                                    <td> <input type="number" name="fish2_tovar" value="<?php echo $roww['fish2_tovar']; ?>"> </td>
                                    <td> <input type="number" name="gyrtovna2_tovar" value="<?php echo $roww['gyrtovna2_tovar']; ?>"> </td>
                                    <td> <input type="number" name="centr2_tovar" value="<?php echo $roww['centr2_tovar']; ?>"> </td>             
                                </tr>
                                <input class="sub-save" type="submit" name="save" value=" Зберегти">
                            </table>
                            <br/><br/><br/><br/><br/>

                        </form>
                        <?php
                    }

                    if (isset($_GET['delete'])) {


                        
                    }

                }


            }
        }
