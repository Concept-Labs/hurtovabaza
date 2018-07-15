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
        
        $this->_renderLayout($template);
    }
}