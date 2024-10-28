<?php

namespace Statistics\Mean;

class HarmonicMeanWithWeight extends MeanWeight
{
    public function getMean($data , $weights){
        $count = count($data);
        if ($count === 0) {
            return 0;
        }

        if(count($weights)!== $count){
            throw new \Exception("Weights must have the same length as data");
        }

        $reciprocalSum  = 0;
        $weightSum  = 0;

        foreach ($data as $key => $value){
            if ($value <= 0) {
                throw new \Exception("Data must be have positive numbers only");
            }
            $reciprocalSum += $weights[$key]/$value;
            $weightSum += $weights[$key];
        }

        return $weightSum / $reciprocalSum;
    }
}
