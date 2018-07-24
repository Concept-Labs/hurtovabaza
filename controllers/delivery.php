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
        //для дебага розкоментувати слід срочку
        //print_r($data); die;
        //тут реєструємо
        //проверяем данні
        if (isset($_POST['log'])) {    !        
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
                session_start([
    'cookie_lifetime' => 30,
]);
                $_SESSION['login_delivery'] = $row['login'];


                //setcookie('login_delivery', $row['login'], time() + (3600 * 12));
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