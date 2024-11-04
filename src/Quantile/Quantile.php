<?php

namespace Statistics\Quantile;

abstract class Quantile{

    /**
     * Calculate a specific quantile for a dataset.
     *
     * This method calculates a single quantile value based on the distribution of
     * values within the provided dataset. The specific quantile to be calculated 
     * (e.g., first quartile, median, third quartile) depends on the implementation 
     * in the subclass, where the quantile definition is defined.
     *
     * @param array<int|float>
     * @return int|float|null
     */
    abstract public function getQuantile(array $data): int|float|null;

}
