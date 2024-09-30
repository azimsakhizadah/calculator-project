<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    // Check if inputs are numbers
    if (is_numeric($number1) && is_numeric($number2)) {
        // Perform calculation based on selected operation
        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                $operationSymbol = '+';
                break;
            case "subtract":
                $result = $number1 - $number2;
                $operationSymbol = '-';
                break;
            case "multiply":
                $result = $number1 * $number2;
                $operationSymbol = '*';
                break;
            case "divide":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                    $operationSymbol = '/';
                } else {
                    $result = "Error! Division by zero.";
                }
                break;
            default:
                $result = "Invalid operation.";
        }

        // Display result
        if (is_numeric($result)) {
            echo "<h2>Result: $number1 $operationSymbol $number2 = $result</h2>";
        } else {
            echo "<h2>$result</h2>";
        }
    } else {
        echo "<h2>Please enter valid numbers.</h2>";
    }
} else {
    echo "<h2>Invalid request.</h2>";
}
?>
