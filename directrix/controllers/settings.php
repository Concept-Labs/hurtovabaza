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

public function tovars() 
{

    $template = $this->_initTemplate('Управління товаром');

    $template->setFile('templates/settings/tovars.phtml');

    $db = $this->_registry->get('db');

    if (isset($_GET['the'])) {
        $tovar = $_GET['the'];
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
        $query_label = "SELECT * FROM $table_tovar";
        $result_label = mysqli_query($db, $query_label);
        $template->set('result_label', $result_label);

        $errors = array();
        if (isset($_POST['add_tovar'])) {
            $label = $_POST['label'];
            $name = $_POST['name'];

            $query_select = "SELECT * FROM $table_tovar WHERE name='$name'";
            $resultat = mysqli_query($db, $query_select);
            $numm = mysqli_num_rows($resultat);
            $row = mysqli_fetch_array($resultat);

            if (empty($label)) {
                $errors = 'Заповніть поле "Назва товару"!';
            }
            elseif (empty($name)) {
                $errors = 'Заповніть поле, в якому використовуються латинські символи!';
            }
            elseif ($numm != 0) {
                $errors = 'Товар "'.$row['label'].'" був вже доданий!';
            }

            if (empty($errors)) {
                if ($numm == 0) {
                    $query = "INSERT INTO $table_tovar (id, name, label) VALUES ('null', '$name', '$label')";
                    $result = mysqli_query($db, $query);
                }
            }
        }
        //код для редагування статті
        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        if (isset($_GET['edit']) || isset($_GET['delete'])) {
            $query_edit = "SELECT * FROM $table_tovar WHERE id='$id'";
            $resultat_edit = mysqli_query($db, $query_edit);
            $roww = mysqli_fetch_array($resultat_edit);
            $template->set('roww', $roww);
        }

        if (isset($_GET['edit'])) {
            if (isset($_POST['save_tovar'])) {
               $label_edit = $_POST['label_edit'];
               $name_edit = $_POST['name_edit'];

               $query_edit_updade = "UPDATE `$table_tovar` SET `name`='$name_edit', `label`='$label_edit' WHERE id='$id'";
               mysqli_query($db, $query_edit_updade);
               header("Location:" .base_url .'settings/tovars?the='.$_GET['the']);
               exit();
           } 
       }

       if (isset($_GET['delete'])) {
        if (isset($_POST['delete_tovar'])) {
          if ($_POST['delete_tovar'] == 1) {
            $delete_tovar = mysqli_query($db, "DELETE FROM `$table_tovar` WHERE id='$id'");
            header("Location:" .base_url .'settings/tovars?the='.$_GET['the']);
        } else {
            header("Location:" .base_url .'settings/tovars?the='.$_GET['the']);
            exit();
        }
    }
}
}

$template->set('errors', $errors);
mysqli_close($db);

$this->_renderLayout($template);
}
}