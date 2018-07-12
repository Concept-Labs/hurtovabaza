<?php
Class Controller_Fruits Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Фрукти');
        
        $template->setFile('templates/fruits.phtml');
        
        $this->_renderLayout($template);
    }
}