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

    if (isset($_POST['save_dostavka'])) {
        if (isset($_POST['fruits']) && !empty($_POST['fruits'])) {
            $fruits = $_POST['fruits'];
            $date = $_POST['date'];
            $valuesArr = array();
            foreach($fruits as $tovar_id => $number){
                $valuesArr[] = "('', '$tovar_id', '$number', '$date')";
            }

            $query = "INSERT INTO fruits_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr);
            $result = mysqli_query($db, $query);
        }

        if (isset($_POST['driedfruit']) && !empty($_POST['driedfruit'])) {
            $driedfruit = $_POST['driedfruit'];
            $date2 = $_POST['date'];
            $valuesArr2 = array();
            foreach($driedfruit as $tovar_id2 => $number2){
                $valuesArr2[] = "('', '$tovar_id2', '$number2', '$date2')";
            }
            
            $query2 = "INSERT INTO driedfruit_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr2);
            $result2 = mysqli_query($db, $query2);
        }

        if (isset($_POST['vegetables']) && !empty($_POST['vegetables'])) {
            $vegetables = $_POST['vegetables'];
            $date3 = $_POST['date'];
            $valuesArr3 = array();
            foreach($vegetables as $tovar_id3 => $number3){
                $valuesArr3[] = "('', '$tovar_id3', '$number3', '$date3')";
            }
            
            $query3 = "INSERT INTO vegetables_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr3);
            $result3 = mysqli_query($db, $query3);
        }

        if (isset($_POST['sausage']) && !empty($_POST['sausage'])) {
            $sausage = $_POST['sausage'];
            $date4 = $_POST['date'];
            $valuesArr4 = array();
            foreach($sausage as $tovar_id4 => $number4){
                $valuesArr4[] = "('', '$tovar_id4', '$number4', '$date4')";
            }
            
            $query4 = "INSERT INTO sausage_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr4);
            $result4 = mysqli_query($db, $query4);
        }

        if (isset($_POST['cheese']) && !empty($_POST['cheese'])) {
            $cheese = $_POST['cheese'];
            $date5 = $_POST['date'];
            $valuesArr5 = array();
            foreach($cheese as $tovar_id5 => $number5){
                $valuesArr5[] = "('', '$tovar_id5', '$number5', '$date5')";
            }
            
            $query5 = "INSERT INTO cheese_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr5);
            $result5 = mysqli_query($db, $query5);
        }

        if (isset($_POST['fish_processing']) && !empty($_POST['fish_processing'])) {
            $fish_processing = $_POST['fish_processing'];
            $date6 = $_POST['date'];
            $valuesArr6 = array();
            foreach($fish_processing as $tovar_id6 => $number6){
                $valuesArr6[] = "('', '$tovar_id6', '$number6', '$date6')";
            }
            
            $query6 = "INSERT INTO fish_processing_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr6);
            $result6 = mysqli_query($db, $query6);
        }

        if (isset($_POST['fish_sm']) && !empty($_POST['fish_sm'])) {
            $fish_sm = $_POST['fish_sm'];
            $date7 = $_POST['date'];
            $valuesArr7 = array();
            foreach($fish_sm as $tovar_id7 => $number7){
                $valuesArr7[] = "('', '$tovar_id7', '$number7', '$date7')";
            }
            
            $query7 = "INSERT INTO fish_sm_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr7);
            $result7 = mysqli_query($db, $query7);
        }

        if (isset($_POST['ovis']) && !empty($_POST['ovis'])) {
            $ovis = $_POST['ovis'];
            $date8 = $_POST['date'];
            $valuesArr8 = array();
            foreach($ovis as $tovar_id8 => $number8){
                $valuesArr8[] = "('', '$tovar_id8', '$number8', '$date8')";
            }
            
            $query8 = "INSERT INTO ovis_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr8);
            $result8 = mysqli_query($db, $query8);
        }

        if (isset($_POST['radema']) && !empty($_POST['radema'])) {
            $radema = $_POST['radema'];
            $date9 = $_POST['date'];
            $valuesArr9 = array();
            foreach($radema as $tovar_id9 => $number9){
                $valuesArr9[] = "('', '$tovar_id9', '$number9', '$date9')";
            }
            
            $query9 = "INSERT INTO radema_delivery (id, tovar_id, number, date) VALUES " .implode(',', $valuesArr9);
            $result9 = mysqli_query($db, $query9);
        }

    }

    $template->set('errorsl', $errorsl);
    mysqli_close($db);

    $this->_renderLayout($template);
}

public function logout() 
{

    $template = $this->_initTemplate('Вихід');

    $template->setFile('templates/delivery/logout.phtml');

    $this->_renderLayout($template);
}
}