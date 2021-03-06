<?php
Class Controller_Delivery Extends Controller_Base 
{
    protected function _initTemplate($title)
    {

        return parent::_initTemplate($title);

    }

    public function index() 
    {

      $template = $this->_initTemplate('Доставка');

      $template->setFile('templates/delivery.phtml');

      $db = $this->_registry->get('db');

      $errorsl = array();
      $errore = '';

      if (isset($_POST['log'])) {      
        $login = htmlspecialchars(stripslashes(trim($_POST['login'])));
        $password = htmlspecialchars(stripslashes(md5($_POST['password'])));

        $result = mysqli_query($db, "SELECT * FROM users_delivery WHERE login='$login'");
        $row = mysqli_fetch_array($result);

        if (empty(trim($_POST['login']))) {
            $errorsl = 'Введіть login!';
        }
        elseif (empty($row['id'])) {
            $errorsl = 'Невірний login!';
        } 
        elseif (empty($_POST['password'])) {
            $errorsl = 'Введіть пароль!';
        } 
        elseif (empty($row['password'] == $password)) {
            $errorsl = 'Невірний пароль!';
        }

        if (empty($errorsl)) {

            $_SESSION['login_delivery'] = $row['login'];
        }

    }

    $query_tovar_fruits= "SELECT * FROM tovar_fruits";
    $resultat_tovar_fruits = mysqli_query($db, $query_tovar_fruits);
    $template->set('resultat_tovar_fruits', $resultat_tovar_fruits);

    $query_tovar_vegetables= "SELECT * FROM tovar_vegetables";
    $resultat_tovar_vegetables = mysqli_query($db, $query_tovar_vegetables);
    $template->set('resultat_tovar_vegetables', $resultat_tovar_vegetables);

    $query_tovar_sausage= "SELECT * FROM tovar_sausage";
    $resultat_tovar_sausage = mysqli_query($db, $query_tovar_sausage);
    $template->set('resultat_tovar_sausage', $resultat_tovar_sausage);

    $query_tovar_cheese= "SELECT * FROM tovar_cheese";
    $resultat_tovar_cheese = mysqli_query($db, $query_tovar_cheese);
    $template->set('resultat_tovar_cheese', $resultat_tovar_cheese);

    $query_tovar_fish_processing= "SELECT * FROM tovar_fish_processing";
    $resultat_tovar_fish_processing = mysqli_query($db, $query_tovar_fish_processing);
    $template->set('resultat_tovar_fish_processing', $resultat_tovar_fish_processing);

    $query_tovar_fish_sm = "SELECT * FROM tovar_fish_sm";
    $resultat_tovar_fish_sm = mysqli_query($db, $query_tovar_fish_sm);
    $template->set('resultat_tovar_fish_sm', $resultat_tovar_fish_sm);

    $query_tovar_ovis= "SELECT * FROM tovar_ovis";
    $resultat_tovar_ovis = mysqli_query($db, $query_tovar_ovis);
    $template->set('resultat_tovar_ovis', $resultat_tovar_ovis);

    $query_tovar_radema= "SELECT * FROM tovar_radema";
    $resultat_tovar_radema = mysqli_query($db, $query_tovar_radema);
    $template->set('resultat_tovar_radema', $resultat_tovar_radema);


    if (isset($_POST['save_dostavka'])) {
        if (isset($_POST['fruits']) && !empty($_POST['fruits'])) {
            $fruits = $_POST['fruits'];
            $date = $_POST['date'];
            $valuesArr = array();
            foreach($fruits as $tovar_id => $number){
                $valuesArr[] = "('', '$tovar_id', '$number', '$date')";
            }

            $query_select = "SELECT * FROM fruits_delivery WHERE tovar_id='$tovar_id' AND date='$date'";
            $resultat = mysqli_query($db, $query_select);
            $numm = mysqli_num_rows($resultat);

            if ($numm == 0) {
                $query = "INSERT INTO fruits_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr);
                $result = mysqli_query($db, $query);
            }
        }


        if (isset($_POST['vegetables']) && !empty($_POST['vegetables'])) {
            $vegetables = $_POST['vegetables'];
            $date3 = $_POST['date'];
            $valuesArr3 = array();
            foreach($vegetables as $tovar_id3 => $number3){
                $valuesArr3[] = "('', '$tovar_id3', '$number3', '$date3')";
            }

            $query_select3 = "SELECT * FROM vegetables_delivery WHERE tovar_id='$tovar_id3' AND date='$date3'";
            $resultat3 = mysqli_query($db, $query_select3);
            $numm3 = mysqli_num_rows($resultat3);

            if ($numm3 == 0) {
                $query3 = "INSERT INTO vegetables_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr3);
                $result3 = mysqli_query($db, $query3);
            }
        }

        if (isset($_POST['sausage']) && !empty($_POST['sausage'])) {
            $sausage = $_POST['sausage'];
            $date4 = $_POST['date'];
            $valuesArr4 = array();
            foreach($sausage as $tovar_id4 => $number4){
                $valuesArr4[] = "('', '$tovar_id4', '$number4', '$date4')";
            }

            $query_select4 = "SELECT * FROM sausage_delivery WHERE tovar_id='$tovar_id4' AND date='$date4'";
            $resultat4 = mysqli_query($db, $query_select4);
            $numm4 = mysqli_num_rows($resultat4);

            if ($numm4 == 0) {
                $query4 = "INSERT INTO sausage_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr4);
                $result4 = mysqli_query($db, $query4);
            }
        }

        if (isset($_POST['cheese']) && !empty($_POST['cheese'])) {
            $cheese = $_POST['cheese'];
            $date5 = $_POST['date'];
            $valuesArr5 = array();
            foreach($cheese as $tovar_id5 => $number5){
                $valuesArr5[] = "('', '$tovar_id5', '$number5', '$date5')";
            }

            $query_select5 = "SELECT * FROM cheese_delivery WHERE tovar_id='$tovar_id5' AND date='$date5'";
            $resultat5 = mysqli_query($db, $query_select5);
            $numm5 = mysqli_num_rows($resultat5);

            if ($numm5 == 0) {
                $query5 = "INSERT INTO cheese_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr5);
                $result5 = mysqli_query($db, $query5);
            }
        }

        if (isset($_POST['fish_processing']) && !empty($_POST['fish_processing'])) {
            $fish_processing = $_POST['fish_processing'];
            $date6 = $_POST['date'];
            $valuesArr6 = array();
            foreach($fish_processing as $tovar_id6 => $number6){
                $valuesArr6[] = "('', '$tovar_id6', '$number6', '$date6')";
            }

            $query_select6 = "SELECT * FROM fish_processing_delivery WHERE tovar_id='$tovar_id6' AND date='$date6'";
            $resultat6 = mysqli_query($db, $query_select6);
            $numm6 = mysqli_num_rows($resultat6);

            if ($numm6 == 0) {
                $query6 = "INSERT INTO fish_processing_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr6);
                $result6 = mysqli_query($db, $query6);
            }
        }

        if (isset($_POST['fish_sm']) && !empty($_POST['fish_sm'])) {
            $fish_sm = $_POST['fish_sm'];
            $date7 = $_POST['date'];
            $valuesArr7 = array();
            foreach($fish_sm as $tovar_id7 => $number7){
                $valuesArr7[] = "('', '$tovar_id7', '$number7', '$date7')";
            }

            $query_select7 = "SELECT * FROM fish_sm_delivery WHERE tovar_id='$tovar_id7' AND date='$date7'";
            $resultat7 = mysqli_query($db, $query_select7);
            $numm7 = mysqli_num_rows($resultat7);

            if ($numm7 == 0) {
                $query7 = "INSERT INTO fish_sm_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr7);
                $result7 = mysqli_query($db, $query7);
            }
        }

        if (isset($_POST['ovis']) && !empty($_POST['ovis'])) {
            $ovis = $_POST['ovis'];
            $date8 = $_POST['date'];
            $valuesArr8 = array();
            foreach($ovis as $tovar_id8 => $number8){
                $valuesArr8[] = "('', '$tovar_id8', '$number8', '$date8')";
            }

            $query_select8 = "SELECT * FROM ovis_delivery WHERE tovar_id='$tovar_id8' AND date='$date8'";
            $resultat8 = mysqli_query($db, $query_select8);
            $numm8 = mysqli_num_rows($resultat8);

            if ($numm8 == 0) {
                $query8 = "INSERT INTO ovis_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr8);
                $result8 = mysqli_query($db, $query8);
            }
        }

        if (isset($_POST['radema']) && !empty($_POST['radema'])) {
            $radema = $_POST['radema'];
            $date9 = $_POST['date'];
            $valuesArr9 = array();
            foreach($radema as $tovar_id9 => $number9){
                $valuesArr9[] = "('', '$tovar_id9', '$number9', '$date9')";
            }

            $query_select9 = "SELECT * FROM radema_delivery WHERE tovar_id='$tovar_id9' AND date='$date9'";
            $resultat9 = mysqli_query($db, $query_select9);
            $numm9 = mysqli_num_rows($resultat9);

            if ($numm9 == 0) {
                $query9 = "INSERT INTO radema_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr9);
                $result9 = mysqli_query($db, $query9);
            }


        }
        if ($numm != 0 && $numm3 != 0 && $numm4 != 0 && $numm5 != 0 && $numm6 != 0 && $numm7 != 0 && $numm8 != 0 && $numm9 != 0) {
            $date_format = date_format(date_create($date), 'd.m.Y');
            $errore = "За <span style='color: black;'>".$date_format."</span> внесення доставки вже існує!";
        }
    }
    
    $template->set('errorsl', $errorsl);
    $template->set('errore', $errore);
    $template->set('result', $result);

    $date_today = date('Y-m-d');
    $date_page = $_POST['date_page'];


    if (!empty($date_page)) {
        $query_dostav_fruits= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM fruits WHERE date='$date_page'");
        $query_dostav_vegetables= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM vegetables WHERE date='$date_page'");
        $query_dostav_sausage= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM sausage WHERE date='$date_page'");
        $query_dostav_fish_sm= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM fish_sm WHERE date='$date_page'");
        $query_dostav_remake= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM remake WHERE date='$date_page'");
        $query_dostav_ovis= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM ovis WHERE date='$date_page'");
        $query_dostav_radema= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM radema WHERE date='$date_page'");
    } 
    else {
        $query_dostav_fruits= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM fruits WHERE date='$date_today'");
        $query_dostav_vegetables= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM vegetables WHERE date='$date_today'");
        $query_dostav_sausage= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM sausage WHERE date='$date_today'");
        $query_dostav_fish_sm= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM fish_sm WHERE date='$date_today'");
        $query_dostav_remake= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM remake WHERE date='$date_today'");
        $query_dostav_ovis= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM ovis WHERE date='$date_today'");
        $query_dostav_radema= mysqli_query($db, "SELECT `id`, `name_tovar`, `dostavka_tovar`, `date` FROM radema WHERE date='$date_today'");
    }
        $template->set('query_dostav_fruits', $query_dostav_fruits);
        $template->set('query_dostav_vegetables', $query_dostav_vegetables);
        $template->set('query_dostav_sausage', $query_dostav_sausage);
        $template->set('query_dostav_fish_sm', $query_dostav_fish_sm);
        $template->set('query_dostav_remake', $query_dostav_remake);
        $template->set('query_dostav_ovis', $query_dostav_ovis);
        $template->set('query_dostav_radema', $query_dostav_radema);

        mysqli_close($db);

        $this->_renderLayout($template);
    }

    public function logout() 
    {

        $template = $this->_initTemplate('Вихід');

        $template->setFile('templates/delivery/logout.phtml');

        $this->_renderLayout($template);
    }

    public function bochka() 
    {

        $template = $this->_initTemplate('Бочка');

        $template->setFile('templates/delivery/bochka.phtml');

        $this->_renderLayout($template);
    }

    public function fish_terminal() 
    {

        $template = $this->_initTemplate('Рибний термінал');

        $template->setFile('templates/delivery/fish_terminal.phtml');

        $db = $this->_registry->get('db');

        $this->_renderLayout($template);
    }

    public function gurtovnya() 
    {

        $template = $this->_initTemplate('Гуртовня');

        $template->setFile('templates/delivery/gurtovnya.phtml');

        $this->_renderLayout($template);
    }

    public function center() 
    {

        $template = $this->_initTemplate('Центр');

        $template->setFile('templates/delivery/center.phtml');

        $this->_renderLayout($template);
    }
}