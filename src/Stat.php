<?php

namespace Statistics;

use Statistics\Mean\ArithmeticMean;
use Statistics\Mean\Mean;
use Statistics\Mean\MeanWeight;
use Statistics\Median\Median;
use Statistics\Variance\Variance;

class Stat {

    public static function mean(Mean $mean , $data) : float{
        return $mean->getMean($data);
    }

    public static function meanWithWeight(MeanWeight $meanWeight, $data , $weights = []) : float{
        return $meanWeight->getMean($data, $weights);
    }

    public static function median(Median $median , $data) : float {
        return $median->getMedian($data);
    }

    public static function getMedianLow(Median $median , $data) : float {
        return $median->getMedianLow($data);
    }

    public static function getMedianHeight(Median $median , $data) : float {
        return $median->getMedianHeight($data);
    }

    public static function mode(Mode $mode , $data) : array {
        return $mode->mode($data);
    }

    public static function variance(Variance $variance , $data) : float {
        $mean = new ArithmeticMean();
        $meanValue = Stat::mean($mean , $data);
        return $variance->getVariance($data , $meanValue);
    }

}
