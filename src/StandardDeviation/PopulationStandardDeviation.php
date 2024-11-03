<?php

namespace Statistics\StandardDeviation;

class PopulationStandardDeviation extends StandardDeviation
{
    /**
     * Calculate the population standard deviation of a dataset (pstdev).
     *
     * The population standard deviation measures the spread of all values in the dataset
     * relative to the dataset's mean.
     * 
     * This function returns a single value representing the population standard deviation,
     * which gives insight into the variability of the entire dataset.
     *
     * @param array<int|float>
     * @return float|null
     */
    public function getStandardDeviation(array $data): ?float
    {
        if (empty($data)) { return null; }

        $mean = array_sum($data) / count($data);
        $sumOfSquares = array_reduce($data, fn($carry, $value) => $carry + pow($value - $mean, 2), 0);

        return sqrt($sumOfSquares / count($data));
    }
}
