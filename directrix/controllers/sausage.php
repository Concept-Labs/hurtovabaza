<?php
Class Controller_Sausage Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Ковбаса');
        
        $template->setFile('templates/sausage.phtml');
        
        $this->_renderLayout($template);
    }
}