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
                        if ($next_date >= '2018-08-01') {?>
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
                    <td rowspan="2"><?php echo $row['number']; ?></td>
                    <td rowspan="2" class="width-name"><?php echo $row['name']; ?></td>
                    <td colspan="4">Залишок</td>
                    <td colspan="4">Замовлення</td>
                    <td rowspan="2"><?php echo $row['dostavka']; ?></td>
                </tr>
                <tr class="table-top">
                 <td><?php echo $row['bochka']; ?></td>
                 <td><?php echo $row['fish']; ?></td>
                 <td><?php echo $row['gyrtovna']; ?></td>
                 <td><?php echo $row['center']; ?></td>
                 <td><?php echo $row['bochka2']; ?></td>
                 <td><?php echo $row['fish2']; ?></td>
                 <td><?php echo $row['gyrtovna2']; ?></td>
                 <td><?php echo $row['center2']; ?></td>

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

    function delivery_by_points($table, $tochka) {

        $db = $this->registry->get('db');
        $errors = array();
        
        if (isset($_GET['tovar'])) {
            $tovar = $_GET['tovar'];
            switch ($tovar) {
                    case 'fruits':
                    $table_tovar = 'tovar_fruits';
                    break;
                    case 'vegetables':
                    $table_tovar = 'tovar_vegetables';
                    break;
                    case 'sausage':
                    $table_tovar = 'tovar_sausage';
                    break;
                    case 'cheese':
                    $table_tovar = 'tovar_cheese';
                    break;
                    case 'fish_processing':
                    $table_tovar = 'tovar_fish_processing';
                    break;
                    case 'fish_sm':
                    $table_tovar = 'tovar_fish_sm';
                    break;
                    case 'ovis':
                    $table_tovar = 'tovar_ovis';
                    break;
                    case 'radema':
                    $table_tovar = 'tovar_radema';
                    break;
                }
                $query_selected = "SELECT * FROM $table_tovar";
                $result_selected = mysqli_query($db, $query_selected);

            if (isset($_POST['add_distribution'])) {

                if ($tochka == 'bochka') {
                    $table_fruits = "distribution_bochka_fruits";
                    $table_vegetables = "distribution_bochka_vegetables";
                    $table_sausage = "distribution_bochka_sausage";
                    $table_cheese = "distribution_bochka_cheese";
                    $table_fish_processing = "distribution_bochka_fish_processing";
                    $table_fish_sm = "distribution_bochka_fish_sm";
                    $table_ovis = "distribution_bochka_ovis";
                    $table_radema = "distribution_bochka_radema";
                }
                elseif ($tochka == 'fish_terminal') {
                    $table_fruits = "distribution_fish_terminal_fruits";
                    $table_vegetables = "distribution_fish_terminal_vegetables";
                    $table_sausage = "distribution_fish_terminal_sausage";
                    $table_cheese = "distribution_fish_terminal_cheese";
                    $table_fish_processing = "distribution_fish_terminal_fish_processing";
                    $table_fish_sm = "distribution_fish_terminal_fish_sm";
                    $table_ovis = "distribution_fish_terminal_ovis";
                    $table_radema = "distribution_fish_terminal_radema";
                }
                elseif ($tochka == 'gurtovnya') {
                    $table_fruits = "distribution_gurtovnya_fruits";
                    $table_vegetables = "distribution_gurtovnya_vegetables";
                    $table_sausage = "distribution_gurtovnya_sausage";
                    $table_cheese = "distribution_gurtovnya_cheese";
                    $table_fish_processing = "distribution_gurtovnya_fish_processing";
                    $table_fish_sm = "distribution_gurtovnya_fish_sm";
                    $table_ovis = "distribution_gurtovnya_ovis";
                    $table_radema = "distribution_gurtovnya_radema";
                }
                elseif ($tochka == 'center') {
                    $table_fruits = "distribution_center_fruits";
                    $table_vegetables = "distribution_center_vegetables";
                    $table_sausage = "distribution_center_sausage";
                    $table_cheese = "distribution_center_cheese";
                    $table_fish_processing = "distribution_center_fish_processing";
                    $table_fish_sm = "distribution_center_fish_sm";
                    $table_ovis = "distribution_center_ovis";
                    $table_radema = "distribution_center_radema";
                }

                $name_tovars = $_POST['name_tovars'];
                $number = $_POST['number'];
                $date = $_POST['date'];

                $query_label = "SELECT * FROM $table_tovar WHERE id='$name_tovars'";
                $result_label = mysqli_query($db, $query_label);
                $row = mysqli_fetch_array($result_label);

                switch ($tovar) {
                    case 'fruits':
                    $query_select = "SELECT * FROM $table_fruits WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'vegetables':
                    $query_select = "SELECT * FROM $table_vegetables WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'sausage':
                    $query_select = "SELECT * FROM $table_sausage WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'cheese':
                    $query_select = "SELECT * FROM $table_cheese WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'fish_processing':
                    $query_select = "SELECT * FROM $table_fish_processing WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'fish_sm':
                    $query_select = "SELECT * FROM $table_fish_sm WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'ovis':
                    $query_select = "SELECT * FROM $table_ovis WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                    case 'radema':
                    $query_select = "SELECT * FROM $table_radema WHERE tovar_id='$name_tovars' AND date='$date'";
                    break;
                }

                $resultat = mysqli_query($db, $query_select);
                $numm = mysqli_num_rows($resultat);

                if (empty($name_tovars)) {
                    $errors = 'Заповніть поле "Назва"!';
                }
                elseif (!ctype_digit($name_tovars)) {
                    $errors = 'В полі "Назва товару", потрібно вибрати назву товару із запропонованого списку!';
                }
                elseif (empty($number)) {
                    $errors = 'Заповніть поле "Кількість"!';
                }
                elseif ($numm != 0) {
                    $errors = 'Сьогодні товар "'.$row['label'].'" був вже доданий!';
                }

                if (empty($errors)) {
                    if ($numm == 0) {
                        switch ($tovar) {
                            case 'fruits':
                            $query = "INSERT INTO $table_fruits (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'vegetables':
                            $query = "INSERT INTO $table_vegetables (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'sausage':
                            $query = "INSERT INTO $table_sausage (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'cheese':
                            $query = "INSERT INTO $table_cheese (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'fish_processing':
                            $query = "INSERT INTO $table_fish_processing (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'fish_sm':
                            $query = "INSERT INTO $table_fish_sm (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'ovis':
                            $query = "INSERT INTO $table_ovis (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                            case 'radema':
                            $query = "INSERT INTO $table_radema (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
                            break;
                        }                       
                        $result = mysqli_query($db, $query);
                    }

                }

            } 
        }


        mysqli_close($db); 
        ?>

        <?php if (!isset($_GET['tovar'])) { ?>
        <div class="delivery-block-menu">
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=fruits';?>">Фрукти</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=vegetables';?>">Овочі</a>
            </span>
            <span>
            <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=sausage';?>">Ковбаса</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=cheese';?>">Сир</a>
            </span>
            <span>      
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=fish_processing';?>">Рибна переробка</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=fish_sm';?>">Риба с/м</a>
            </span>
            <span>
                  <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=ovis';?>">Овіс</a>
            </span>
            <span>
                <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=radema';?>">Радема</a>
            </span>       
        </div>
        <?php } 
        else {?>

        <?php if (isset($_GET['tovar'])) { ?>
        <div class="delivery-block-menu">
            <span>
                <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=fruits';?>">Фрукти</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=vegetables';?>">Овочі</a>
            </span>
            <span>
                <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=sausage';?>">Ковбаса</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=cheese';?>">Сир</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=fish_processing';?>">Рибна переробка</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=fish_sm';?>">Риба с/м</a>
            </span>
            <span>
                 <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=ovis';?>">Овіс</a>
            </span>
            <span>
                <a href="<?php echo base_url .'delivery/'.$tochka .'?tovar=radema';?>">Радема</a>
            </span>     
        </div>
        <div class="add-errore">
            <?php 
            if (!empty($errors)) echo "<div style='color: red;'>" .$errors ."</div>"; 
                if (empty($errors)) {
                    if (!empty($_POST)) {
                        echo "<div style='color: green;'>Товар \"".$row['label']."\" успішно доданий!</div>";
                    }
                }
                ?>
            </div>
            <div>
                <form action="<?php echo base_url .'delivery/'.$tochka.'?tovar='.$tovar;?>" method="post">
                    <table class="add-delivery">
                        <tr class="table-top">
                            <td>Назва товару</td>
                            <td>Кількість</td>
                        </tr>
                        <tr>
                            <td> 
                                <select name="name_tovars" id="">
                                    <option >Виберіть товар</option>
                                    <?php while ($row_tovar = mysqli_fetch_array($result_selected)) {?>
                                    <option value="<?php echo $row_tovar['id'] ?>"><?php echo $row_tovar['label'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td> <input type="number" name="number" step="0.1"/> </td>          
                        </tr>
                    </table>
                    <input class="sub-save" type="submit" name="add_distribution" value=" Додати">
                    <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>" />
                    <br/><br/><br/><br/><br/>

                </form>
            </div>


            <?php }
        }
    }
}
