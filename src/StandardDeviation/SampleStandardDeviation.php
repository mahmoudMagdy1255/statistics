<?php

namespace Statistics\StandardDeviation;

class SampleStandardDeviation extends StandardDeviation
{
    /**
     * Calculates the standard deviation for a sample from a population. 
     * It’s an estimate of the variability in the entire population based on the sample (stdev).
     *
     * @param array<int|float>
     * @return float|null
     */
    public function getStandardDeviation(array $data): ?float
    {
        if (empty($data) || count($data) == 1) {
            return null;
        }

        $mean = array_sum($data) / count($data);
        $sumOfSquares = array_reduce($data, fn($carry, $value) => $carry + pow($value - $mean, 2), 0);

        return sqrt($sumOfSquares / (count($data) - 1));
    }
}
