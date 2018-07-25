<?php
Class Controller_Settings Extends Controller_Base 
{
    protected function _initTemplate($title)
    {

        return parent::_initTemplate($title);

    }

    public function index() 
    {

      $template = $this->_initTemplate('Настройки');

      $template->setFile('templates/settings.phtml');

      $db = $this->_registry->get('db');

      $query= mysqli_query($db, "SELECT * FROM `users_site`");
      $num = mysqli_num_rows($query);

      $query2= mysqli_query($db, "SELECT * FROM `users_delivery`");
      $num2 = mysqli_num_rows($query2);

      $query3= mysqli_query($db, "SELECT * FROM `users_admin`");
      $num3 = mysqli_num_rows($query3);

      $query4= mysqli_query($db, "SELECT * FROM `users_directrix`");
      $num4 = mysqli_num_rows($query4);
      $row4 = mysqli_fetch_array($query4);

      $template->set('query', $query);
      $template->set('num', $num);

      $template->set('query2', $query2);
      $template->set('num2', $num2);

      $template->set('query3', $query3);
      $template->set('num3', $num3);

      $template->set('query4', $query4);
      $template->set('num4', $num4);
      $template->set('row4', $row4);


      $id = isset($_GET['id']) ? $_GET['id'] : 0; 

      $res = mysqli_query($db, "   SELECT * FROM users_site WHERE id='$id'");


      $roww = mysqli_fetch_array($res);
      $template->set('roww', $roww);
//редагування
      if (isset($_GET['edit_site'])) {
        $errore = array();

        if (isset($_POST['save'])) {
            $password = md5($_POST['password']);
            $password_confirm = $_POST['password-confirm'];

            if (empty($_POST['password'])) {
                $errore = 'Введіть, будь ласка, новий пароль!';
            } elseif ($_POST['password'] != $password_confirm) {
                $errore = 'Новий пароль і підтвердження пароля не співпадають!';
            }
            
            if (empty($errore)) {
                mysqli_query($db, "UPDATE `users_site` SET `password`='$password' WHERE id='$id'");

                header("Location:" .base_url .'settings');
                exit();
            }
            
        }

        $template->set('errore', $errore);
    }

//видалення 
    if (isset($_GET['delete_site'])) {
        if (isset($_POST['delete_user'])) {
            if ($_POST['delete_user'] == 1) {
                $delete = mysqli_query($db, "DELETE FROM `users_site` WHERE id='$id'");

                header("Location:" .base_url .'settings');
            } else {
                header("Location:" .base_url .'settings');
                exit();
            }
        }
        $template->set('delete', $delete);


    }




    $this->_renderLayout($template);
}
}