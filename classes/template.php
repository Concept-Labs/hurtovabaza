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

        mysqli_close($db);

        ?>

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
                    </tr>
                    <?php } } ?>
                </table>
              
                </div>

                <?php
            }
        }
