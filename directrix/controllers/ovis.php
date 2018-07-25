<?php
Class Controller_Ovis Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Овіс');
        
        $template->setFile('templates/ovis.phtml');
        
        $this->_renderLayout($template);
    }
}