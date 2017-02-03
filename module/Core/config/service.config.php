<?php

namespace Core;

use Core\Services\SortService;

return [
  
    'factories' => [
        'SortService' => function($container){
            $model = $container->get(Models\MergeAlgorithm::class);
            return new SortService($model);
        }
    ],
    'invokables'=>[
        Models\MergeAlgorithm::class => Models\MergeAlgorithm::class
    ]
];