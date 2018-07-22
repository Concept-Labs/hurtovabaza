<?php
Class Controller_Radema Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Радема');
        
        $template->setFile('templates/radema.phtml');
        
        $this->_renderLayout($template);
    }
}