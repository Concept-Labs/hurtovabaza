<?php
Class Controller_Purchase Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Закупка');
        
        $template->setFile('templates/purchase.phtml');
        
        $this->_renderLayout($template);
    }
}