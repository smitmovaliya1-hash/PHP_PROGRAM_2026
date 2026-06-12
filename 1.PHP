<?php

define("STUDENT_NAME", "Smit Movaliya");

$semester = "Semester 4";

// Subject Marks
$html = 85;
$java = 78;
$python = 92;
$dbms = 88;
$os = 80;

$totalMarks = 500;
$obtainedMarks = $html + $java + $python + $dbms + $os;

$percentage = ($obtainedMarks / $totalMarks) * 100;

echo "<h2>Previous Semester Result</h2>";

echo "Student Name: " . STUDENT_NAME . "<br>";
echo "Semester: " . $semester . "<br><br>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Subject</th>
        <th>Marks</th>
      </tr>";

echo "<tr><td>PHP</td><td>$html</td></tr>";
echo "<tr><td>Java</td><td>$java</td></tr>";
echo "<tr><td>Python</td><td>$python</td></tr>";
echo "<tr><td>DBMS</td><td>$dbms</td></tr>";
echo "<tr><td>Operating System</td><td>$os</td></tr>";

echo "<tr>
        <th>Total Obtained Marks</th>
        <th>$obtainedMarks</th>
      </tr>";

echo "</table><br>";

echo "Total Marks: $totalMarks <br>";
echo "Obtained Marks: $obtainedMarks <br>";
echo "Percentage: " . number_format($percentage, 2) . "%";

?>
