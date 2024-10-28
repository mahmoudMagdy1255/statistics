<?php

namespace Statistics\Variance;

abstract class Variance{
    public function variance(array $data , $mean){
        $variance = array_sum(array_map(function($value) use ($mean){
            return pow($value - $mean , 2);
        } , $data));
        return $variance;
    }

    abstract function getVariance(array $data , $mean);

}
