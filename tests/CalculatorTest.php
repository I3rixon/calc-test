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
    }

    public function testSubtract() {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
        $this->assertEquals(-4, $this->calculator->subtract(2, 6));
    }

    public function testMultiply() {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(0, $this->calculator->multiply(2, 0));
    }

    public function testDivide() {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->assertEquals(0.5, $this->calculator->divide(1, 2));
    }

    public function testDivideByZeroThrowsException() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(5, 0);
    }
}