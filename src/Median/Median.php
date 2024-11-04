<?php

namespace Statistics\Median;

abstract class Median
{
    /**
     * Calculate the median based on the specific implementation.
     *
     * @param array<int|float>
     * @return int|float|null
     */
    abstract public function getMedian(array $data): int|float|null;
}
