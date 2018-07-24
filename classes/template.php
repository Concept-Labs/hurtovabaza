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

        $date_today = date('Y-m-d');
        $date_page = $_POST['date_page'];
        $date_today_format = date_format(date_create($date_today), 'd.m.Y');
        $date_page_format = date_format(date_create($date_page), 'd.m.Y');

        if (!empty($date_page)) {
            $query2= mysqli_query($db, "SELECT * FROM $table WHERE date='$date_page'");
        } 
        else {
            $query2= mysqli_query($db, "SELECT * FROM $table WHERE date='$date_today'");
        }
        $num2 = mysqli_num_rows($query2);        

        //код для редагування статті
        $id = isset($_GET['id']) ? $_GET['id'] : 0; 


        $res = mysqli_query($db, "   SELECT * FROM $table WHERE id='$id'");


        $roww = mysqli_fetch_array($res);

        if (isset($_POST['save'])) {
            $name_tovar = strip_tags($_POST['name_tovar']);
            $bochka_tovar = $_POST['bochka_tovar'];
            $fish_tovar = $_POST['fish_tovar'];
            $gyrtovna_tovar = $_POST['gyrtovna_tovar'];
            $centr_tovar = $_POST['centr_tovar'];
            
            mysqli_query($db, "UPDATE `$table` SET `name_tovar`='$name_tovar',`bochka_tovar`='$bochka_tovar',`fish_tovar`='$fish_tovar',`gyrtovna_tovar`='$gyrtovna_tovar',`centr_tovar`='$centr_tovar' WHERE id='$id'");

            header("Location:" .base_url .$table);
            exit();
        }

//видалення статті
        if (isset($_GET['delete'])) {
            if (isset($_POST['delete_tovar'])) {
                if ($_POST['delete_tovar'] == 1) {
                    $delete = mysqli_query($db, "DELETE FROM `$table` WHERE id='$id'");
                    header("Location:" .base_url .$table);
                } else {
                    header("Location:" .base_url .$table);
                    exit();
                }
            }

            

        }

        mysqli_close($db);

        ?>

        <?php 
        if (!isset($_GET['edit']) && !isset($_GET['delete'])) { ?>
        <div class="date">
            <form action="<?php echo base_url .$table; ?>" method="post">
                <select class="data-page" name="date_page" onchange="this.form.submit()" value="<?php echo $next_date;?>">
                    <option>Дата</option>
                    <?php 
                    for($i = 0;  $i <= 4000; $i++ ){
                        $next_date = date('Y-m-d', strtotime($date_today .' -'.$i .'day'));
                        $next_date_format = date_format(date_create($next_date), 'd.m.Y');
                        if ($next_date >= '2018-07-14') {?>
                        <option value="<?php echo $next_date; ?>"><?php echo $next_date_format;?></option> 
                        <?php }
                    }
                    ?>
                </select>
            </form>
            <?php if (empty($date_page)) {
                echo $date_today_format;
            } 
            else {
                echo $date_page_format;
            } ?>
        </div>        

        <div>
            <table>
                  <a href="<?php echo base_url .'add?' .$table; ?>" class="add-tovar" title="Додати рядок"><i class="fas fa-plus"></a>
                <tr class="table-top">
                    <td><?php echo $row['number']; ?></td>
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
                    while ($row2 = mysqli_fetch_array($query2, MYSQLI_BOTH)) { ?>
                    <tr>
                        <td><?php echo $row2['id']; ?></td>
                        <td class="width-name"><?php echo $row2['name_tovar']; ?></td>
                        <td><?php echo $row2['bochka_tovar']; ?></td>
                        <td><?php echo $row2['fish_tovar']; ?></td>
                        <td><?php echo $row2['gyrtovna_tovar']; ?></td>
                        <td><?php echo $row2['centr_tovar']; ?></td>
                        <td><?php echo $row2['bochka2_tovar']; ?></td>
                        <td><?php echo $row2['fish2_tovar']; ?></td>
                        <td><?php echo $row2['gyrtovna2_tovar']; ?></td>
                        <td><?php echo $row2['centr2_tovar']; ?></td>
                        <td><?php echo $row2['dostavka_tovar']; ?></td>
                        <td> <a href="<?php echo base_url .$table .'?edit&id='.$row2['id']; ?>" class="edit" title="Редагувати"> <i class="fas fa-pen"></i></a> <a href="<?php echo base_url .$table .'?delete&id='.$row2['id']; ?>" class="delete" title="Видалити"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php } } ?>
                </table>
              
                </div>


            <?php
        } else { 
            if (isset($_GET['edit'])) {
                ?>
                <div>
                    <form action="<?php echo base_url .$table .'?edit&id='.$roww['id']; ?>" method="post">
                        <table class="add-table">
                            <tr class="table-top">
                                <td>№</td>
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
                                <td> <?php echo $roww['id']; ?></td>
                                <td> <input type="text" name="name_tovar" value="<?php echo $roww['name_tovar']; ?>"> </td>
                                <td> <input type="number" name="bochka_tovar" value="<?php echo $roww['bochka_tovar']; ?>"> </td>
                                <td> <input type="number" name="fish_tovar" value="<?php echo $roww['fish_tovar']; ?>"> </td>
                                <td> <input type="number" name="gyrtovna_tovar" value="<?php echo $roww['gyrtovna_tovar']; ?>"> </td>
                                <td> <input type="number" name="centr_tovar" value="<?php echo $roww['centr_tovar']; ?>"> </td>
                                <td><?php echo $roww['bochka2_tovar']; ?></td>
                                <td><?php echo $roww['fish2_tovar']; ?></td>
                                <td><?php echo $roww['gyrtovna2_tovar']; ?></td>
                                <td><?php echo $roww['centr2_tovar']; ?></td>             
                            </tr>
                            <input class="sub-save" type="submit" name="save" value=" Зберегти">
                        </table>
                        <br/><br/><br/><br/><br/>

                    </form>
                    <?php
                }
                    if (isset($_GET['delete'])) {
                        if (!isset($delete)) {?>
                        <div class="medium-block-top zatmenie">
                            <div class="centr-block">
                            <form action="<?php echo base_url .$table .'?delete&id='.$roww['id']; ?>" method="post">
                                Ви дійсно хочете <span style="color: red;">видалити</span> даний товар!!!<br/><br/>
                                <button type="submit" class="confirmation-btn" name="delete_tovar" value="1">Так</button>
                                <button type="submit" class="confirmation-btn" name="delete_tovar" value="0">Ні</button>
                            </form>
                        </div>
                        </div>
                        
                        <?php  } else {
                            echo "<div style='color: green;'>Товар успішно видалено!</div>";
                        }

                    }

                }


            }
        }
