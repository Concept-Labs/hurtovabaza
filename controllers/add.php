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
        
        $this->_renderLayout($template);
    }
}