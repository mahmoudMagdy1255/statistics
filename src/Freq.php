<?php

namespace Statistics;

class Freq {

    public static function frequencies($data , $percentage = false) : array{
        $hashTable = [];
        $count = count($data);
        foreach($data as $value){
            $hashTable[$value] = isset($hashTable[$value])? $hashTable[$value] + 1 : 1;
        }

        if($percentage)
            $hashTable = array_map(function($value) use ($count) {
                return round(100*$value/$count , 2);
            },$hashTable);

        return $hashTable;
    }

}
