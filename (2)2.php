<?php
function studentDetails($studentName, $enrollmentNumber, $semester)
{
    echo "Student Name: " . $studentName . "<br>";
    echo "Enrollment Number: " . $enrollmentNumber . "<br>";
    echo "Semester: " . $semester . "<br>";
}

// Function Call
studentDetails("Smit Movaliya", "92400527078", 5);
?>