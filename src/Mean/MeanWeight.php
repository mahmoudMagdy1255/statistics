<?php

namespace Statistics\Mean;

abstract class MeanWeight {

    abstract function getMean(array $data , $weight);

}
