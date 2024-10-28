<?php

namespace Statistics\Variance;

class SampleVariance extends Variance
{
    public function getVariance($data , $mean){
        $count = count($data);
        $variance = $this->variance($data , $mean);
        return $variance / ($count - 1);
    }
}
