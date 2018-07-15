<?php
Class Controller_Add Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Додавання товару');
        
        $template->setFile('templates/add.phtml');

        $db = $this->_registry->get('db');
        $errore = array();

        if (isset($_POST['add'])) {
            $kod = $_POST['kod_tovar'];
            $name = $_POST['name_tovar'];
            $bochka = $_POST['bochka_tovar'];
            $fish = $_POST['fish_tovar'];
            $gyrtovna = $_POST['gyrtovna_tovar'];
            $centr = $_POST['centr_tovar'];
            $bochka2 = $_POST['bochka2_tovar'];
            $fish2 = $_POST['fish2_tovar'];
            $gyrtovna2 = $_POST['gyrtovna2_tovar'];
            $centr2 = $_POST['centr2_tovar'];
            $date = $_POST['date'];

            if (empty($kod)) {
                $errore = 'Введіть, будь ласка, <u>код</u> товару!';
            } 
            elseif (empty($name)) {
                $errore = 'Введіть, будь ласка, <u>назву</u> товару!';
            }

            if (empty($bochka))  $bochka = 0;
            if (empty($fish))  $fish = 0;
            if (empty($gyrtovna))  $gyrtovna = 0;
            if (empty($centr))  $centr = 0;
            if (empty($bochka2))  $bochka2 = 0;
            if (empty($fish2))  $fish2 = 0;
            if (empty($gyrtovna2))  $gyrtovna2 = 0;
            if (empty($centr2))  $centr2 = 0;
            
            $dovtavutu = $bochka2 + $fish2 + $gyrtovna2 + $centr2;

            if (empty($errore)) {
                mysqli_query($db, "INSERT INTO `number_product`(`id`, `kod_tovar`, `name_tovar`, `bochka_tovar`, `fish_tovar`, `gyrtovna_tovar`, `centr_tovar`, `bochka2_tovar`, `fish2_tovar`, `gyrtovna2_tovar`, `centr2_tovar`, `dostavka_tovar`, `date`) VALUES (null, '$kod', '$name', '$bochka', '$fish', '$gyrtovna', '$centr', '$bochka2', '$fish2', '$gyrtovna2', '$centr2', '$dovtavutu', '$date')");
            
            }
            
            
        }
        $template->set('errore', $errore);
        mysqli_close($db);
        
        $this->_renderLayout($template);
    }
}