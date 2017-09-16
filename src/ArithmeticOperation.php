<?php

namespace Acme;

class ArithmeticOperation
{
    /**
     * @return float|int
     */
    public function add()
    {
        $numbers = func_get_args();
        
        return array_sum($numbers);
    }
    
    public function multiply()
    {
        $numbers = func_get_args();
        
        $output = 1;
        foreach ($numbers as $number) {
            $output *= $number;
        }
        
        return $output;
    }
}
