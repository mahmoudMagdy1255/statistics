<?php

namespace Statistics\Quantile;

class ThirdQuartile extends Quantile
{
    /**
     * Calculate the third quartile of the dataset.
     *
     * The third quartile (Q3) is the median of the upper half of the dataset.
     *
     * @param array<int|float> 
     * @return int|float|null 
     */
    public function getQuantile(array $data): int|float|null
    {
        if (empty($data)){ return null; }

        sort($data);
        $count = count($data);

        $start = (int) ceil($count / 2);
        $upperHalf = array_slice($data, $start);

        $upperCount = count($upperHalf);
        $midIndex = intdiv($upperCount - 1, 2);

        return $upperHalf[$midIndex];
    }
}
