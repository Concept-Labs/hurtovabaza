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


    $res2 = mysqli_query($db, "   SELECT * FROM users_delivery WHERE id='$id'");

    $roww2 = mysqli_fetch_array($res2);
    $template->set('roww2', $roww2);
//редагування
    if (isset($_GET['edit_delivery'])) {
        $errore2 = array();

        if (isset($_POST['save'])) {
            $password2 = md5($_POST['password']);
            $password_confirm2 = $_POST['password-confirm'];

            if (empty($_POST['password'])) {
                $errore2 = 'Введіть, будь ласка, новий пароль!';
            } elseif ($_POST['password'] != $password_confirm2) {
                $errore2 = 'Новий пароль і підтвердження пароля не співпадають!';
            }
            
            if (empty($errore2)) {
                mysqli_query($db, "UPDATE `users_delivery` SET `password`='$password2' WHERE id='$id'");

                header("Location:" .base_url .'settings');
                exit();
            }   
        }
        $template->set('errore2', $errore2);
    }

//видалення 
    if (isset($_GET['delete_delivery'])) {
        if (isset($_POST['delete_user'])) {
            if ($_POST['delete_user'] == 1) {
                $delete2 = mysqli_query($db, "DELETE FROM `users_delivery` WHERE id='$id'");

                header("Location:" .base_url .'settings');
            } else {
                header("Location:" .base_url .'settings');
                exit();
            }
        }
        $template->set('delete2', $delete2);
    }


    $res3 = mysqli_query($db, "   SELECT * FROM users_admin WHERE id='$id'");

    $roww3 = mysqli_fetch_array($res3);
    $template->set('roww3', $roww3);
//редагування
    if (isset($_GET['edit_admin'])) {
        $errore3 = array();

        if (isset($_POST['save'])) {
            $password3 = md5($_POST['password']);
            $password_confirm3 = $_POST['password-confirm'];

            if (empty($_POST['password'])) {
                $errore3 = 'Введіть, будь ласка, новий пароль!';
            } elseif ($_POST['password'] != $password_confirm3) {
                $errore3 = 'Новий пароль і підтвердження пароля не співпадають!';
            }
            
            if (empty($errore3)) {
                mysqli_query($db, "UPDATE `users_admin` SET `password`='$password3' WHERE id='$id'");

                header("Location:" .base_url .'settings');
                exit();
            }   
        }
        $template->set('errore3', $errore3);
    }

//видалення 
    if (isset($_GET['delete_admin'])) {
        if (isset($_POST['delete_user'])) {
            if ($_POST['delete_user'] == 1) {
                $delete3 = mysqli_query($db, "DELETE FROM `users_admin` WHERE id='$id'");

                header("Location:" .base_url .'settings');
            } else {
                header("Location:" .base_url .'settings');
                exit();
            }
        }
        $template->set('delete3', $delete3);
    }

    $res4 = mysqli_query($db, "   SELECT * FROM users_directrix WHERE id='$id'");

      $roww4 = mysqli_fetch_array($res4);
      $template->set('roww4', $roww4);
//редагування
      if (isset($_GET['edit_directrix'])) {
        $errore4 = array();

        if (isset($_POST['save'])) {
            $password4 = md5($_POST['password']);
            $password_confirm4 = $_POST['password-confirm'];

            if (empty($_POST['password'])) {
                $errore4 = 'Введіть, будь ласка, новий пароль!';
            } elseif ($_POST['password'] != $password_confirm4) {
                $errore4 = 'Новий пароль і підтвердження пароля не співпадають!';
            }
            
            if (empty($errore4)) {
                mysqli_query($db, "UPDATE `users_directrix` SET `password`='$password4' WHERE id='$id'");

                header("Location:" .base_url .'settings');
                exit();
            }   
        }
        $template->set('errore4', $errore4);
    }

//видалення 
    if (isset($_GET['delete_directrix'])) {
        if (isset($_POST['delete_user'])) {
            if ($_POST['delete_user'] == 1) {
                $delete4 = mysqli_query($db, "DELETE FROM `users_directrix` WHERE id='$id'");

                header("Location:" .base_url .'settings');
            } else {
                header("Location:" .base_url .'settings');
                exit();
            }
        }
        $template->set('delete4', $delete4);
    }


    $this->_renderLayout($template);
}

public function add_users() 
{

    $template = $this->_initTemplate('Додавання користувачів');

    $template->setFile('templates/settings/add_users.phtml');

    $db = $this->_registry->get('db');
    $errore = array();

    if (isset($_GET['site'])) {
        $_SESSION['table'] = 'users_site';
        $_SESSION['page'] = 'site';
    } elseif (isset($_GET['delivery'])) {
        $_SESSION['table'] = 'users_delivery';
        $_SESSION['page'] = 'delivery';
    } elseif (isset($_GET['admin'])) {
        $_SESSION['table'] = 'users_admin';
        $_SESSION['page'] = 'admin';
    } elseif (isset($_GET['directrix'])) {
        $_SESSION['table'] = 'users_directrix';
        $_SESSION['page'] = 'directrix';
    }
    $table = $_SESSION['table'];
    $page = $_SESSION['page'];
    $template->set('page', $page);

    if (isset($_POST['add'])) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        $password_confirm = $_POST['password-confirm'];
        $date = $_POST['date'];

        if (empty($login)) {
            $errore = 'Введіть, будь ласка, <u>логін</u> користувача!';
        } elseif (empty($_POST['password'])) {
            $errore = 'Введіть, будь ласка, <u>пароль</u> користувача!';
        } elseif ($_POST['password'] != $password_confirm) {
            $errore = 'Пароль і пітвердження пароля не співпадають!';
        }

        if (empty($errore)) {
            mysqli_query($db, "INSERT INTO `$table`(`id`, `login`, `password`, `date`) VALUES (null, '$login', '$password', '$date')");

            header("Location:" .base_url .'settings');
            exit();
        }
    }
    $template->set('errore', $errore);
    mysqli_close($db);

    $this->_renderLayout($template);
}
}