<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operation = $_GET['operation'];

switch ($operation) {
    case 'add':
        $result = $num1 + $num2;
        break;
    case 'subtract':
        $result = $num1 - $num2;
        break;
    case 'multiply':
        $result = $num1 * $num2;
        break;
    case 'divide':
        $result = $num2 != 0 ? $num1 / $num2 : "Division by zero error";
        break;
    case 'modulus':
        $result = $num1 % $num2;
        break;
    default:
        $result = "Invalid operation selected";
}

echo "The result is: " . $result;
?>
