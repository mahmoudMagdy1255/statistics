<?php

namespace Statistics\Mean;

class GeometricMean extends Mean
{
    public function getMean($data){
        $count = count($data);
        if ($count === 0) {
            return 0;
        }

        $mean = 1;

        foreach ($data as $value){
            if ($value <= 0) {
                throw new \Exception("Data must be have positive numbers only");
            }
            $mean *= $value;
        }

        return pow($mean, 1 / $count);
    }
}
