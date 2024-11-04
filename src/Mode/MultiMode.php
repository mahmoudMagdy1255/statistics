<?php

namespace Statistics\Mode;

class MultiMode
{
    /**
     * Calculate all modes of a dataset.
     *
     * This method returns a list of the most frequently occurring values in the dataset.
     * If no values are repeated, it returns an empty array.
     *
     * @param array<int|string>
     * @return array<int|string>
     */
    public function getModes(array $data): array
    {
        if (empty($data)) { return []; }

        $valuesCount = array_count_values($data);
        $maxCount = max($valuesCount);

        $modes = array_keys($valuesCount, $maxCount);

        return $modes;
    }
}
