<?php
Abstract Class Controller_Base 
{
    protected $_registry;
    protected $_baseTemplate = null;
    protected $_session = null;
    
    function __construct($registry) 
    {
        if(!$this->_session){
            $this->_session = session_start();
        }
        $this->_registry = $registry;
        $this->_baseTemplate = $this->_registry->get('template');
    }

    
    abstract function index();

    protected function _initTemplate($title)
    {
		$this->_baseTemplate->addCss('styles/menu.css');
        $this->_baseTemplate->addCss('styles/dostavka.css');
        $this->_baseTemplate->addCss('styles/input.css');
        $this->_baseTemplate->addCss('styles/mod-window.css');
        $this->_baseTemplate->addCss('styles/style-con.css');
		$this->_baseTemplate->addCss('styles/style.css');
		
		
        $parentTemplate = $this->_baseTemplate;
        $parentTemplate->set('title', $title);
        return clone $this->_registry->get('template');
    }

    protected function _renderLayout($template, $usePhp = false)
    {
        $parentTemplate = $this->_baseTemplate;
        
        $headerTemplate = clone $parentTemplate;
        $headerTemplate->setFile('templates/header.phtml');
        $_htmlheader = $headerTemplate->toHtmlWithPhp();
        $parentTemplate->set('header', $_htmlheader);
        

        $menuTemplate = clone $parentTemplate;
        $menuTemplate->setFile('templates/menu.phtml');
        $_html = $menuTemplate->toHtml();
        $parentTemplate->set('menu', $_html);

        if($usePhp){
            $html = $template->toHtmlWithPhp();
        } else {
            $html = $template->toHtml();
        }
        $parentTemplate->set('content', $template->toHtmlWithPhp());	
        
    }
}