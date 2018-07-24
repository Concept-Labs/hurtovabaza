<?php
Class Controller_Fish_SM Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Фрукти');
        
        $template->setFile('templates/fish_sm.phtml');
        
        $this->_renderLayout($template);
    }
}