<?php

namespace Statistics;

class Mode {

    public function mode($data) : array {
        $tables = [];
        $max = 0;
        $modes = [];
        foreach($data as $number){
            $tables[$number] = ($tables[$number] ?? 0) + 1;

            $value = $tables[$number];

            if($value > $max){
                $max = $value;
                $modes = [$number];
            }elseif($value == $max){
                $modes[] = $number;
            }
        }

        if(count($modes) == count($data))
            return [];

        return $modes;
    }

}
