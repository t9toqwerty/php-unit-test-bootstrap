<?php

namespace Acme;

class ArithmeticOperation
{
    public function add()
    {
        $numbers = func_get_args();

        return array_sum($numbers);
    }

    /**
     * @return float|int
     */
    public function addRandom()
    {
        $numberOne = $this->getRandomNumber();
        $numberTwo = $this->getRandomNumber();

        return $numberOne + $numberTwo;
    }

    public function getRandomNumber()
    {
        return rand(5, 100);
    }
}
