<?php
Class Controller_Delivery Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Доставка');
        
        $template->setFile('templates/delivery.phtml');
        
        $this->_renderLayout($template);
    }
}