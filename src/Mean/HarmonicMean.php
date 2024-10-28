<?php

namespace Statistics\Mean;

class HarmonicMean extends Mean
{
    public function getMean($data){
        $count = count($data);
        if ($count === 0) {
            return 0;
        }

        $reciprocalSum  = 0;

        foreach ($data as $value){
            if ($value <= 0) {
                throw new \Exception("Data must be have positive numbers only");
            }
            $reciprocalSum += 1/$value;
        }

        return $count / $reciprocalSum;
    }
}
