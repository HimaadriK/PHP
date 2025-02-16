<?php
$stars = 15; // Start with the maximum number of stars

for ($i = $stars; $i >= 1; $i -= 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>"; // Move to the next line
}

echo "<br>";
echo "This program is executed by Himaadri Kapoor,2220100224";
?>
