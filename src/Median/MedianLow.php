<?php

namespace Statistics\Median;

class MedianLow extends Median
{
    /**
     * Calculate the low median of a sorted dataset.
     *
     * For an even-length dataset, returns the lower of the two middle values.
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
        $midIndex = intdiv($count - 1, 2);

        return $data[$midIndex];
    }
}
