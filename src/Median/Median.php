<?php

namespace Statistics\Median;

class Median
{
    public function getMedian($data){
        sort($data);
        $count = count($data);
        if($this->isOdd($count)){
            return $this->getMiddleValue($data, $count);
        }else{
            return ($this->getMiddleValue($data , $count) + $this->getMiddleValue($data, $count - 1)) / 2;
        }
    }

    public function getMedianLow($data){
        sort($data);
        $count = count($data);
        if($this->isOdd($count)){
            return $this->getMiddleValue($data, $count);
        }else{
            $firstMedianValue = $this->getMiddleValue($data , $count);
            $secondMedianValue = $this->getMiddleValue($data, $count - 1);
            return $firstMedianValue < $secondMedianValue ? $firstMedianValue : $secondMedianValue;
        }
    }

    public function getMedianHeight($data){
        sort($data);
        $count = count($data);
        if($this->isOdd($count)){
            return $this->getMiddleValue($data, $count);
        }else{
            $firstMedianValue = $this->getMiddleValue($data , $count);
            $secondMedianValue = $this->getMiddleValue($data, $count - 1);
            return $firstMedianValue > $secondMedianValue ? $firstMedianValue : $secondMedianValue;
        }
    }

    protected function isOdd($number) : bool{
        return $number % 2!= 0;
    }

    protected function getMiddleValue($data , $count) : float{
        $middleIndex = floor($count / 2);
        return $data[$middleIndex];
    }

}
