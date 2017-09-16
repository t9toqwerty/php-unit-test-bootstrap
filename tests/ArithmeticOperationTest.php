<?php

namespace Acme\Tests;

use Acme\ArithmeticOperation;
use PHPUnit\Framework\TestCase;

class ArithmeticOperationTest extends TestCase
{
    public function testAdd()
    {
        $arithmeticOperation = new ArithmeticOperation();
        $this->assertEquals(10, $arithmeticOperation->add(2, 2, 2, 2, 2));
    }
    
    public function testMultiply()
    {
        $arithmeticOperation = new ArithmeticOperation();
        $this->assertEquals(32, $arithmeticOperation->multiply(2, 2, 2, 2, 2));
    }
}
