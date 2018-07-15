<?php
Class Controller_Vegetables Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Овочі');
        
        $template->setFile('templates/vegetables.phtml');
        
        $db = $this->_registry->get('db');

        $query= mysqli_query($db, "SELECT * FROM `name_baz`");
        $num = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        $template->set('num', $num);
        $template->set('row', $row);

        $query2= mysqli_query($db, "SELECT * FROM `number_product`");
        $num2 = mysqli_num_rows($query);
        $row2 = mysqli_fetch_array($query);
        $template->set('num2', $num2);
        $template->set('query2', $query2);

        mysqli_close($db);
        
        $this->_renderLayout($template);
    }
}