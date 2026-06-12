<?php

$num1 = 25;
$num2 = 40;
$num3 = 15;

// Maximum
if ($num1 >= $num2 && $num1 >= $num3) {
    $max = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $max = $num2;
} else {
    $max = $num3;
}

// Minimum
if ($num1 <= $num2 && $num1 <= $num3) {
    $min = $num1;
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $min = $num2;
} else {
    $min = $num3;
}

echo "Maximum Number = $max <br>";
echo "Minimum Number = $min";

?>