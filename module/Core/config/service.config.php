<?php

namespace Core;

use Core\Services\SortService;

return [
  
    'factories' => [
        'SortService' => function($container){
            $model = $container->get(Models\MergeSort::class);
            return new SortService($model);
        }
    ],
    'invokables'=>[
        Models\MergeSort::class => Models\MergeSort::class
    ]
];