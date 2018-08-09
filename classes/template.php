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

function delivery_by_points($table, $tochka) {

        $db = $this->registry->get('db');
$errors = array();
if (isset($_POST['add_distribution'])) {

    $name_tovars = $_POST['name_tovars'];
    $number = $_POST['number'];
    $date = $_POST['date'];

    if (ctype_digit($name_tovars)) {

        $query = "INSERT INTO $table (id, tovar_id, number, date) VALUES ('null', '$name_tovars', '$number', '$date')";
        $result = mysqli_query($db, $query);
    } 
    if (empty($name_tovars)) {
        $errors = 'Заповніть поле "Назва" із запропонованого списку!';
    }
    elseif (!ctype_digit($name_tovars)) {
        $errors = 'В полі "Назва", потрібно записати назву товару цифрами із запропонованого списку!';
    }
    elseif (empty($number)) {
        $errors = 'Заповніть поле "Кількість"!';
    }
}
mysqli_close($db); 
?>

<div class="add-errore">
    <?php 
    if (!empty($errors)) echo "<div style='color: red;'>" .$errors ."</div>"; 
        if (empty($errors)) {
            if (!empty($_POST)) {
                echo "<div style='color: green;'>Товар \"".$name_tovars."\" успішно доданий!</div>";
            }
        }
        ?>
    </div>
    <div>
        <form action="<?php echo base_url .'delivery/'.$tochka;?>" method="post">
            <table class="add-delivery">
                <tr class="table-top">
                    <td>Назва товару</td>
                    <td>Кількість</td>
                </tr>
                <tr>
                    <td> 
                        <input name="name_tovars" list="tovars" value="<?php echo @$_POST['name_tovars']; ?>">
                        <datalist id="tovars">
                            <option value="1">Банан</option>
                            <option value="[2]">Апельсин</option>
                            <option value="[3]">Лимон</option>
                            <option value="[4]">Лайм</option>
                            <option value="[5]">Грейпфрукт</option>
                            <option value="[6]">Ківі</option>
                            <option value="[7]">Ананас вел.</option>
                            <option value="[8]">Ананас мал.</option>
                            <option value="[9]">Гранат</option>
                            <option value="[10]">Груша</option>
                            <option value="[11]">Персик "Редхевен"</option>
                            <option value="[12]">Персик "Принц"</option>
                            <option value="[13]">Персик "Інжирний"</option>
                            <option value="[14]">Нектарин "Світлий"</option>
                            <option value="[15]">Нектарин "Темний"</option>
                            <option value="[16]">Абрикос</option>
                            <option value="[17]">Слива</option>
                            <option value="[18]">Виноград "Киш-Миш"</option>
                            <option value="[19]">Виноград "Мускат"</option>
                            <option value="[20]">Виноград "Аркадія"</option>
                            <option value="[21]">Виноград "Кардинал"</option>
                            <option value="[22]">Виноград "Преображеніє"</option>
                            <option value="[23]">Виноград "Молдова"</option>
                            <option value="[24]">Яблуко "Голден"</option>
                            <option value="[25]">Ізюм</option>
                            <option value="[26]">Чорнослив в'ялений</option>
                            <option value="[27]">Курага</option>
                            <option value="[28]">Фініки</option>
                            <option value="[29]">Інжир</option>
                            <option value="[30]">Цукати</option>
                            <option value="[31]">Сушка</option>
                            <option value="[32]">Гриб</option>
                            <option value="[33]">Імбир</option>
                            <option value="[34]">Огірок "Корнішок"</option>
                            <option value="[35]">Кріп</option>
                            <option value="[36]">Петрушка</option>
                            <option value="[37]">Салат зелений</option>
                            <option value="[38]">Авокадо</option>
                            <option value="[39]">Айзберг</option>
                            <option value="[40]">Рукола</option>
                            <option value="[41]">Помідор "Круглий"</option>
                            <option value="[42]">Помідор "Сливочка"</option>
                            <option value="[43]">Помідор жовтий</option>
                            <option value="[44]">Помідор червоний</option>
                            <option value="[45]">Помідор "Чорний принц"</option>
                            <option value="[46]">Помідор "Сокаль"</option>
                            <option value="[47]">Помідор "Зоря"</option>
                            <option value="[48]">Помідор "Чері"</option>
                            <option value="[49]">Помідор "Коктейль"</option>
                            <option value="[50]">Баклажан</option>
                            <option value="[51]">Перець херсон</option>
                            <option value="[52]">Перець червоний</option>
                            <option value="[53]">Перець жовтий</option>
                            <option value="[54]">Часник</option>
                            <option value="[55]">Капуста "Білок."</option>
                            <option value="[56]">Капуста "Цвітна"</option>
                            <option value="[57]">Капуста "Пекінська"</option>
                            <option value="[58]">Капуста "Броколі"</option>
                            <option value="[59]">Морква</option>
                            <option value="[60]">Картопля</option>
                            <option value="[61]">Буряк</option>
                            <option value="[62]">Цибуля</option>
                            <option value="[63]">Перець чилі</option>
                            <option value="[64]">Цибуля "Ялта"</option>
                            <option value="[65]">Цибуля біла</option>
                            <option value="[66]">Союзна</option>
                            <option value="[67]">Оригінальна</option>
                            <option value="[68]">Мінська</option>
                            <option value="[69]">Радянська</option>
                            <option value="[70]">Екстра</option>
                            <option value="[71]">Олів'є</option>
                            <option value="[72]">Молочна ДСТУ(Гоща)</option>
                            <option value="[73]">Посольська вар.(Гоща)</option>
                            <option value="[74]">Сарделька українська</option>
                            <option value="[75]">Сарделька "Товстунчик"</option>
                            <option value="[76]">Сарделька "Шкільна"</option>
                            <option value="[77]">Сарделька "Моцарела"</option>
                            <option value="[78]">Сосиска "Ласуня"</option>
                            <option value="[79]">Сосиска "Лакомка"</option>
                            <option value="[80]">Краківська (Брашно)</option>
                            <option value="[81]">Шпикачка</option>
                            <option value="[82]">Довбушська (Брашно)</option>
                            <option value="[83]">Фуршетна (Гаяр)</option>
                            <option value="[84]">Фуршетна (Брашно)</option>
                            <option value="[85]">Сервілат царський</option>
                            <option value="[86]">Посольська (Стема)</option>
                            <option value="[87]">Фірмова (Стема)</option>
                            <option value="[88]">Салямі італійська</option>
                            <option value="[89]">Святкова (Стема)</option>
                            <option value="[90]">Баликова</option>
                            <option value="[91]">Мисливські</option>
                            <option value="[92]">Домашня на дровах</option>
                            <option value="[93]">Московська (Городок)</option>
                            <option value="[94]">Московська (Стема)</option>
                            <option value="[95]">Московська ДСТУ</option>
                            <option value="[96]">Замкова</option>
                            <option value="[97]">Старослов'янська</option>
                            <option value="[98]">Ужгородська</option>
                            <option value="[99]">Австралійська</option>
                            <option value="[100]">Бочок (Польща)</option>
                            <option value="[101]">Махан</option>
                            <option value="[102]">Мацик</option>
                            <option value="[103]">Слойка</option>
                            <option value="[104]">Снеки до пива</option>
                            <option value="[105]">Мюнхенські білі</option>
                            <option value="[106]">Фуршетна (Стасюк)</option>
                            <option value="[107]">Дрогобицька (Стасюк)</option>
                            <option value="[108]">Гуцульська (Стасюк)</option>
                            <option value="[109]">Дом. на дровах (Стасюк)</option>
                            <option value="[110]">Московська (Стасюк)</option>
                            <option value="[111]">Мисливські (Стасюк)</option>
                            <option value="[112]">Мускатна (Стасюк)</option>
                            <option value="[113]">Шашличні (Стасюк)</option>
                            <option value="[114]">Сир "Серенада"</option>
                            <option value="[115]">Сир "Жовтий"</option>
                            <option value="[116]">Сир "Моцарела"(чорний)</option>
                            <option value="[117]">Сир "Моцарела"(зелений)</option>
                            <option value="[118]">Сир "Моцарела"(довгий)</option>
                            <option value="[119]">Сир "Королівський"</option>
                            <option value="[120]">Сир "Фавіта"</option>
                            <option value="[121]">Сир "Слайен"</option>
                            <option value="[122]">Сир "Топльоний"</option>
                            <option value="[123]">Сирки "Тімоша"</option>
                            <option value="[124]">Масло "Мінське"</option>
                            <option value="[125]">Оселедець с/с</option>
                            <option value="[126]">Скумбрія с/с</option>
                            <option value="[127]">Філе оселедця с/с</option>
                            <option value="[128]">Торнадо скумбрія</option>
                            <option value="[129]">Тюлька в олії</option>
                            <option value="[130]">Тюлька балтійська</option>
                            <option value="[131]">Оселедець (горох)</option>
                            <option value="[132]">Салака в олії</option>
                            <option value="[133]">Шпроти в олії</option>
                            <option value="[134]">Горбуша кусок</option>
                            <option value="[135]">Мідія</option>
                            <option value="[136]">Скумбрія в олії</option>
                            <option value="[137]">Морква по кор.</option>
                            <option value="[138]">Салат "Шанхай"</option>
                            <option value="[139]">Салат "Бабине літо"</option>
                            <option value="[140]">Морська з цибулею</option>
                            <option value="[141]">Морська з морквою</option>
                            <option value="[142]">Скумбрія х/к</option>
                            <option value="[143]">Скумбрія г/к</option>
                            <option value="[144]">Філе скумбр. х/к</option>
                            <option value="[145]">Філе оселед. х/к</option>
                            <option value="[146]">Сайра х/к</option>
                            <option value="[147]">Мойва х/к</option>
                            <option value="[148]">Салака х/к</option>
                            <option value="[149]">Дунайка</option>
                            <option value="[150]">Вомер</option>
                            <option value="[151]">Тушка бичка</option>
                            <option value="[152]">Хребет лос. х/к</option>
                            <option value="[153]">Хребет лос. г/к</option>
                            <option value="[154]">Вугор х/к</option>
                            <option value="[155]">Лящ в'ялений</option>
                            <option value="[156]">Окунь в'ялений</option>
                            <option value="[157]">Щука в'ялена</option>
                            <option value="[158]">Чехонь в'ялена</option>
                            <option value="[159]">Плотва в'ялена</option>
                            <option value="[160]">Оселедець с/м</option>
                            <option value="[161]">Скумбрія с/м</option>
                            <option value="[162]">Хек с/м</option>
                            <option value="[163]">Салака с/м</option>
                            <option value="[164]">Креветка</option>
                            <option value="[165]">Стейк масляної</option>
                            <option value="[166]">Стейк лосося</option>
                            <option value="[167]">Креветка королівська</option>
                            <option value="[168]">Філе пангасіуса</option>
                            <option value="[169]">Нототенія</option>
                            <option value="[170]">Крупа ячна</option>
                            <option value="[171]">Крупа пшенична</option>
                            <option value="[172]">Крупа кукурудзяна</option>
                            <option value="[173]">Гречка</option>
                            <option value="[174]">Гречаний проділ</option>
                            <option value="[175]">Перловка</option>
                            <option value="[176]">Рис довгий</option>
                            <option value="[177]">Рис круглий</option>
                            <option value="[178]">Рис парений</option>
                            <option value="[179]">Рис січка</option>
                            <option value="[180]">Пшоно</option>
                            <option value="[181]">Манка</option>
                            <option value="[182]">Горох</option>
                            <option value="[183]">Арнаутка</option>
                            <option value="[184]">Сіль кам'яна</option>
                            <option value="[185]">Сіль в брикеті</option>
                            <option value="[186]">Крохмаль</option>
                            <option value="[187]">Сода харчова</option>
                            <option value="[188]">Оцет львівський</option>
                            <option value="[189]">Цукор</option>
                            <option value="[190]">Кілька даринка</option>
                            <option value="[191]">Кукурудза коцервов.</option>
                            <option value="[192]">Вермішель городок 3кг</option>
                            <option value="[193]">Вермішель городок 1кг</option>
                            <option value="[194]">Зернятко раф. 5л</option>
                            <option value="[195]">Зернятко не раф. 5л</option>
                            <option value="[196]">Зернятко раф. 2л</option>
                            <option value="[197]">Зернятко раф. 3л</option>
                            <option value="[198]">Зернятко раф. 1л</option>
                            <option value="[199]">Зернятко не раф. 1л</option>
                            <option value="[200]">Олія (Польща)1л</option>
                            <option value="[201]">Олія (Польща)5л</option>
                            
                        </datalist>
                    </td>
                    <td> <input type="number" name="number" step="0.1" value="<?php echo @$_POST['number']; ?>"> </td>          
                </tr>

                <input class="sub-save" type="submit" name="add_distribution" value=" Зберегти">
            </table>
            <input class="sub-save" type="submit" name="add" value=" Зберегти">
            <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>" />
            <br/><br/><br/><br/><br/>

        </form>
    </div>


                <?php
            }
    }
