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
        
        $this->_renderLayout($template);
    }
}