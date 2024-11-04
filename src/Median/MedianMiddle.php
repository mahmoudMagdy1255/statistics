<?php

namespace Statistics\Median;

class MedianMiddle extends Median
{
    /**
     * Calculate the median of a sorted dataset.
     *
     * For an odd-length dataset, returns the exact middle value.
     * For an even-length dataset, returns the average of the two middle values.
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

        if ($count % 2 !== 0) {
            return $data[$midIndex];
        }

        return ($data[$midIndex] + $data[$midIndex + 1]) / 2;
    }
}
