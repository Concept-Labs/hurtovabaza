<?php
Class Controller_Index_Authorization Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
    }

    public function index() 
    {
        
        $template = $this->_initTemplate('Гуртова База');
        
        $template->setFile('templates/index_authorization.phtml');

        $db = $this->_registry->get('db');
        
        
        $errorsl = array();
        //для дебага розкоментувати слід срочку
        //print_r($data); die;
        //тут реєструємо
        //проверяем данні
        if (isset($_POST['log'])) {    !        
            $login = htmlspecialchars(stripslashes(trim($_POST['login'])));
            $password = htmlspecialchars(stripslashes(md5($_POST['password'])));

            $result = mysqli_query($db, "SELECT * FROM users_directrix WHERE login='$login'");
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

            if (!empty($errorsl)) { 
        echo "<div class='authorization-error'>" .$errorsl ."</div>"; 
            }

            if (empty($errorsl)) {
                $_SESSION['login_directrix']=$row['login']; 
            }

        }
        
        mysqli_close($db);
        
        $this->_renderLayout($template);
    }

    public function logout() 
    {
        $template = $this->_initTemplate('Вихід');

        $template->setFile('templates/index_authorization/logout.phtml');

        $this->_renderLayout($template, true);
    }
}