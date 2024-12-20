<?php
namespace App;
class Calculator {
    public function add($a, $b) {
        return round($a + $b, 5);
    }

    public function subtract($a, $b) {
        return round($a - $b, 5);
    }

    public function multiply($a, $b) {
        return round($a * $b, 5);
    }

    public function divide($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero");
        }
        return round($a / $b, 5);
    }
}

