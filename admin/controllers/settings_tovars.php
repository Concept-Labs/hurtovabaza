<?php
Class Controller_Settings_Tovars Extends Controller_Base 
{
    protected function _initTemplate($title)
    {

        return parent::_initTemplate($title);

    }

    public function index() 
    {

       $template = $this->_initTemplate('Управління товаром');

       $template->setFile('templates/settings_tovars.phtml');

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
             header("Location:" .base_url .'settings_tovars?the='.$_GET['the']);
             exit();
         } 
     }

     if (isset($_GET['delete'])) {
        if (isset($_POST['delete_tovar'])) {
          if ($_POST['delete_tovar'] == 1) {
            $delete_tovar = mysqli_query($db, "DELETE FROM `$table_tovar` WHERE id='$id'");
            header("Location:" .base_url .'settings_tovars?the='.$_GET['the']);
        } else {
            header("Location:" .base_url .'settings_tovars?the='.$_GET['the']);
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