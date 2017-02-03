<?php

namespace Core\Services;

use Core\Models\MergeSort;

class SortService{
    
    private $_sortModel;
    
    public function __construct(MergeSort $model) {
        $this->_sortModel = $model;
    }
    
    public function getinfo(){
        return 'hola';
    }
}

