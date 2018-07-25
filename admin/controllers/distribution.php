<?php
Class Controller_Distribution Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Розприділення');
        
        $template->setFile('templates/distribution.phtml');
        
        $this->_renderLayout($template);
    }
}