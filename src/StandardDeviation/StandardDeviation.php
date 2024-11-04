<?php

namespace Statistics\StandardDeviation;

abstract class StandardDeviation
{
    /**
     * Calculate the standard deviation of a dataset.
     *
     * @param array<int|float>
     * @return float|null
     */
    abstract public function getStandardDeviation(array $data): ?float;
}
