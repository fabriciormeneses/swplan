<?php

namespace SwPlan\System;

class Core
{
    protected $_action;
    protected $_controller;
    protected $_explode = array();
    protected $_parameters = array();
    protected $_url;
    
    public function __construct()
    {
        $this->getUrlFromServer();
        $this->setExplode();
        $this->setController();
        $this->setAction();
    }
    
    public function run(){
        $fullQualifiedClassName = "SwPlan\\Controller\\".$this->getController();
        $controller = new $fullQualifiedClassName;
        $controller->{$this->getAction()}();
    }
    
    protected function getUrlFromServer()
    {
        $this->_url = isset($_GET['key']) ? $_GET['key'] : 'index/index/' ;
    }
    
    protected function setExplode()
    {
        $this->_explode = explode('/', $this->_url);
    }
    
    public function setController()
    {
        $this->_controller = ucfirst($this->_explode[0])."Controller";
    }
    
    public function getController()
    {
        return $this->_controller;
    }
    
    public function getAction()
    {
        return $this->_action;
    }
    
    public function setAction()
    {
        $this->_action = $this->_explode[1].'Action';
    }
}
