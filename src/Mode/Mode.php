<?php

namespace Statistics\Mode;

class Mode
{
    /**
     * Calculate the single mode of a dataset.
     *
     * The mode is the most frequently occurring value in the dataset. 
     * This method returns a single mode value or null if there is no unique mode.
     *
     * @param array<int|string>
     * @return int|string|null
     */
    public function getMode(array $data): int|string|null
    {
        if (empty($data)) { return null; }

        $valuesCount = array_count_values($data);
        $maxCount = max($valuesCount);

        $modes = array_keys($valuesCount, $maxCount);

        return count($modes) === 1 ? $modes[0] : null;
    }
}
