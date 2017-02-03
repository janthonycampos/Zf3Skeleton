<?php

namespace Core\Services;

use Core\Models\MergeAlgorithm;

class SortService{
    
    private $_sortModel;
    
    public function __construct(MergeAlgorithm $model) {
        $this->_sortModel = $model;
    }
    
    public function sort($data){
        $data_input = explode(',', $data['numbers']);
        $response   = $this->_sortModel->mergesort($data_input);
        return $response;
    }
    
    public function getinfo(){
        return 'hola';
    }
}

