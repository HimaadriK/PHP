<?php
// Function to calculate factorial using recursion
function factorial($num) {
    if ($num <= 1) {
        return 1;
    }
    return $num * factorial($num - 1);
}

// Example usage
$number = 10; // Change this number to test other values
echo "Factorial of $number is " . factorial($number) . ".";
echo "<br>";
echo "This program is executed by Himaadri Kapoor,2220100224";

?>
