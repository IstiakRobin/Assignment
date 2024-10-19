<?php
// Function to calculate the result
function calculateMarks($subjectOne, $subjectTwo, $subjectThree, $subjectFour, $subjectFive) {

   // Check if marks are within valid range
    if (($subjectOne < 0 || $subjectOne > 100) || ($subjectTwo < 0 || $subjectTwo > 100) || 
        ($subjectThree < 0 || $subjectThree > 100) || ($subjectFour < 0 || $subjectFour > 100) || 
        ($subjectFive < 0 || $subjectFive > 100)) {
        echo "Marks should be between 0 to 100.";
        return;
    }
    
    // Check for failure condition
    if ($subjectOne < 33 || $subjectTwo < 33 || $subjectThree < 33 || $subjectFour < 33 || $subjectFive < 33) {
        echo "The student has failed.";
        return;
    }
    
    // Calculate total marks and average
    $totalMarks = $subjectOne + $subjectTwo + $subjectThree + $subjectFour + $subjectFive;
    $averageMarks = $totalMarks / 5;
    
    // Determine the grade using switch-case
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }
    
    // Output the results
    echo "Total Marks: " . $totalMarks . "\n";
    echo "Average Marks: " . $averageMarks . "\n";
    echo "Grade: " . $grade;
}


$Bangla = 88;
$English = 63;
$Physics = 87;
$Chemistry = 67;
$Biology = 45; 

calculateMarks($Bangla, $English, $Physics, $Chemistry, $Biology);