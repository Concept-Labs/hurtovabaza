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

        if (isset($_POST['add'])) {
            $kod = $_POST['kod'];
            $name = $_POST['name'];
            $bochka = $_POST['bochka'];
            $fish = $_POST['fish'];
            $gyrtovna = $_POST['gyrtovna'];
            $centr = $_POST['centr'];
            $bochka2 = $_POST['bochka2'];
            $fish2 = $_POST['fish2'];
            $gyrtovna2 = $_POST['gyrtovna2'];
            $centr2 = $_POST['centr2'];
            $date = $_POST['kod'];

            if (empty($bochka2))  $bochka2 = 0;
            if (empty($fish2))  $fish2 = 0;
            if (empty($gyrtovna2))  $gyrtovna2 = 0;
            if (empty($centr2))  $centr2 = 0;
            
            $dovtavutu = $bochka2 + $fish2 + $gyrtovna2 + $centr2;

            mysqli_query($db, "INSERT INTO number_product (kod, name, bochka, fish, gyrtovna, centr, bochka2, fish2, gyrtovna2, centr2, bochka2, bochka2) VALUES ('$kod', '$name', '$bochka', '$fish', '$gyrtovna', '$centr', '$bochka2', '$fish2', '$gyrtovna2', '$centr2', '$centr', '$centr')");
            
        }
        
        
        $this->_renderLayout($template);
    }
}