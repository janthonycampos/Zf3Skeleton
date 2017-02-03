<?php

namespace Core;

return [
  
    'factories' => [
        'SortService' => function($container){
            $model = $container->get(Models\MergeSort::class);
            return new Service\SortService($model);
        }
    ],
    'invokables'=>[
        Models\MergeSort::class => Models\MergeSort::class
    ]
];