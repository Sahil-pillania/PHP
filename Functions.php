<?php
echo "Welcome to functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohan = [34, 98, 45, 12, 98, 93];
// $sumMarks = processMarks($rohan);
$sumMarks = avgMarks($rohan);

$Sahil = [99, 98, 93, 94, 17, 100];
// $sumMarksSahil = processMarks($Sahil);
$sumMarksSahil = avgMarks($Sahil);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksSahil";

?>