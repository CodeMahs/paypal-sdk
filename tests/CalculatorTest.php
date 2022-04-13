<?php

namespace Codemahs\PaypalSdk\Test;
use Codemahs\PaypalSdk\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $sum = $calculator->add(1, 2);
        $this->assertSame(3, $sum);
    }

}