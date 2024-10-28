<?php

namespace Statistics\Mean;

class ArithmeticMean extends Mean
{
    public function getMean($data){
        $sum = array_reduce($data , function($sum, $value){
            return $sum += $value;
        } , 0);
        return $sum / count($data);
    }
}
