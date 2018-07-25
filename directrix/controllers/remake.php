<?php
Class Controller_Remake Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Переробка');
        
        $template->setFile('templates/remake.phtml');
        
        $this->_renderLayout($template);
    }
}