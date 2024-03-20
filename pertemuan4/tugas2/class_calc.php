<?php
class Calculator {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function addition() {
        return $this->num1 + $this->num2;
    }

    public function subtraction() {
        return $this->num1 - $this->num2;
    }

    public function multiplication() {
        return $this->num1 * $this->num2;
    }

    public function division() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Cannot divide by zero";
        }
    }
}

$calculator = new Calculator(12, 5);

echo "Addition: " . $calculator->addition() . "<br>";  
echo "Subtraction: " . $calculator->subtraction() . "<br>";  
echo "Multiplication: " . $calculator->multiplication() . "<br>";  
echo "Division: " . $calculator->division();  
?>