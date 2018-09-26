<?php

namespace Acme\Tests;

use Acme\ArithmeticOperation;
use PHPUnit\Framework\TestCase;

class ArithmeticOperationTest extends TestCase
{
    /**
     * @dataProvider basicAddTestDataProvider
     */
    public function testAdd($firstNumber, $secondNumber, $sum)
    {
        $arithmeticOperation = new ArithmeticOperation();
        $this->assertEquals($sum, $arithmeticOperation->add($firstNumber, $secondNumber));
    }

    public function testAddRandom()
    {
        $mockArithmeticOperation =
            $this->getMockBuilder(ArithmeticOperation::class)
                ->setMethods(['getRandomNumber'])
                ->getMock();
        $mockArithmeticOperation->expects($this->any())
            ->method('getRandomNumber')
            ->willReturn(5);

        $this->assertEquals(10, $mockArithmeticOperation->addRandom());
    }

    public function basicAddTestDataProvider()
    {
        return [
            [1, 2, 3],
            [4, 5, 9],
            [11, 2, 13],
        ];
    }
}
