<?php

namespace Application;

return [
    'factories' => [
        Controller\IndexController::class => function($container){
            $controller = new Controller\IndexController();
            $controller->setService('SortService', $container->get('SortService'));
            
            return $controller;
        }
    ]
];

