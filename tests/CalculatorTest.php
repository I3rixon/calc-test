<?php
namespace Tests;
use App\Calculator;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    public function testAdd() {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(0, $this->calculator->add(2, -2));
        $this->assertEquals(-1, $this->calculator->add(-1, 0));
    }

    public function testSubtract() {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
        $this->assertEquals(-4, $this->calculator->subtract(2, 6));
        $this->assertEquals(0, $this->calculator->subtract(0, 0));
    }

    public function testMultiply() {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(0, $this->calculator->multiply(2, 0));
        $this->assertEquals(-6, $this->calculator->multiply(-2, 3));
    }

    public function testDivide() {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->assertEquals(0.5, $this->calculator->divide(1, 2));
        $this->assertEquals(-2, $this->calculator->divide(-6, 3));
    }    

    public function testAddWithFloats() {
        $this->assertEquals(5.7, $this->calculator->add(2.5, 3.2));
        $this->assertEquals(0.3, $this->calculator->add(2.1, -1.8));
    }

    public function testSubtractWithFloats() {
        $this->assertEquals(0.3, $this->calculator->subtract(3.5, 3.2));
        $this->assertEquals(-4.1, $this->calculator->subtract(2.5, 6.6));
    }

    public function testMultiplyWithFloats() {
        $this->assertEquals(7.5, $this->calculator->multiply(2.5, 3));
        $this->assertEquals(0.0, $this->calculator->multiply(2.5, 0));
    }

    public function testDivideWithFloats() {
        $this->assertEquals(2.5, $this->calculator->divide(5.0, 2.0));
        $this->assertEquals(0.25, $this->calculator->divide(0.5, 2.0));
    }

    public function testDivideByZeroThrowsException() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(5, 0);
    }
    
}