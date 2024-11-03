<?php

namespace Statistics\Quantile;

class Quantiles
{
    /**
     * Calculate multiple quantiles for the given dataset.
     *
     * Divides the dataset into `n` equal parts and returns the quantile values.
     * For example, n=4 returns the quartiles (Q1, Q2, Q3), and n=10 returns deciles.
     * 
     * $n Number of quantiles to divide the data into
     *
     * @param array<int|float>
     * @param int
     * @return array<int|float>
     */
    public function getQuantiles(array $data, int $n): array
    {
        if (empty($data) || $n < 1) { return []; }

        sort($data);
        $count = count($data);

        $quantiles = [];
        for ($i = 1; $i < $n; $i++) {
            $rank = ($i * $count) / $n;

            if (floor($rank) == $rank) {
                $quantiles[] = $data[$rank - 1];
            } else {
                $lowerIndex = floor($rank) - 1;
                $upperIndex = ceil($rank) - 1;
                $quantiles[] = $data[$lowerIndex] + ($rank - floor($rank)) * ($data[$upperIndex] - $data[$lowerIndex]);
            }
        }

        return $quantiles;
    }
}
