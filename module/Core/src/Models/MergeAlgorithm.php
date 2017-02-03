<?php

namespace Core\Models;

class MergeAlgorithm{
    
    public function __construct() {
        ;
    }
    
    function mergesort($numlist)
    {
        if(count($numlist) == 1 ) return $numlist;

        $mid  = count($numlist) / 2;
        $left = array_slice($numlist, 0, $mid);
        $right= array_slice($numlist, $mid);
        $left = $this->mergesort($left);
        $right= $this->mergesort($right);

        return $this->merge($left, $right);
    }
 
    function merge($left, $right)
    {
        $result    = [];
        $leftIndex = 0;
        $rightIndex= 0;

        while($leftIndex<count($left) && $rightIndex<count($right))
        {
            if($left[$leftIndex]>$right[$rightIndex]){
                $result[]=$right[$rightIndex];
                $rightIndex++;
            }else{
                $result[]=$left[$leftIndex];
                $leftIndex++;
            }
        }
        while($leftIndex<count($left))
        {
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
        while($rightIndex<count($right))
        {
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        return $result;
    }
    
}

