<?php

namespace Statistics;

class Prime {

    public static function primes($number){
        $numbers = [];
        $numbers = array_fill(0 , $number + 1 , true);
        $numbers[0] = $numbers[1] = false;
        for($i = 2 ; pow($i , 2) <= $number ; $i++ ){
            if($numbers[$i]){
                for ($j = pow($i , 2); $j <= $number; $j += $i) {
                    $numbers[$j] = false;
                }
            }
        }
        return array_keys(array_filter($numbers));
    }

}
