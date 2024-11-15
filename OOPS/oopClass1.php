<?php
class Calculation {
    public $a, $b, $c;

    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    function display($result) {
        echo "Answer is: " . $result;
    }
}

// Create an instance of the Calculation class
$o1 = new Calculation();

// Assign values to $a and $b
$o1->a = 10;
$o1->b = 5;

// Perform operations
$result_sum = $o1->sum();
$o1->display($result_sum); // Displays: Answer is: 15

echo "<br>"; // Line break for clarity

$result_sub = $o1->sub();
$o1->display($result_sub); // Displays: Answer is: 5
?>
