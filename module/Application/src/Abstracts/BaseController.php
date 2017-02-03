<?php

namespace Application\Abstracts;
use \Zend\Mvc\Controller\AbstractActionController;

abstract class BaseController extends AbstractActionController{

    public function setService($name, $service){
        $this->{$name} = $service;
    }
    
} 

