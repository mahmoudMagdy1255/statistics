<?php

namespace Statistics\Median;

class MedianHigh extends Median
{
    /**
     * Calculate the high median of a sorted dataset.
     *
     * For an even-length dataset, returns the higher of the two middle values.
     * For an odd-length dataset, returns the exact middle value.
     *
     * @param array<int|float> 
     * @return int|float|null 
     */
    public function getMedian(array $data): int|float|null
    {
        if (empty($data)) { return null; }

        sort($data);
        $count = count($data);
        $midIndex = intdiv($count, 2);

        return $data[$midIndex];
    }
}
