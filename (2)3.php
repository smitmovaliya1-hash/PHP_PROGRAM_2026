<?php
function calculatePercentage($m1, $m2, $m3, $m4, $m5)
{
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = ($total / 500) * 100; // Assuming each subject is out of 100

    return $percentage;
}

// Function Call
$per = calculatePercentage(80, 75, 90, 85, 70);

echo "Percentage = " . $per . "%";
?>