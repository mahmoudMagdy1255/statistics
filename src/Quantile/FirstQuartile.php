<?php

namespace Statistics\Quantile;

class FirstQuartile extends Quantile
{
    /**
     * Calculate the first quartile of the dataset.
     *
     * The first quartile (Q1) is the median of the lower half of the dataset.
     *
     * @param array<int|float>
     * @return int|float|null
     */
    public function getQuantile(array $data): int|float|null
    {
        if (empty($data)) { return null; }

        sort($data);
        $count = count($data);

        $end = (int) floor($count / 2);
        $lowerHalf = array_slice($data, 0, $end);

        $lowerCount = count($lowerHalf);
        $midIndex = intdiv($lowerCount - 1, 2);

        return $lowerHalf[$midIndex];
    }
}