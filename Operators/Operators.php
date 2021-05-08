<?php
//operators in PHP
//Arithmetic 
// Assignment
//Logical
//Comparison 

//Arithmetic
$a = 50;
$b = 10;

echo "Result of a+b is: " . ($a+$b) . "<br>";
echo "Result of a-b is: " . ($a-$b) . "<br>";
echo "Result of a*b is: " . ($a*$b) . "<br>";
echo "Result of a/b is: " . ($a/$b) . "<br>";
echo "Result of a%b is: " . ($a%$b) . "<br>";
echo "Result of a**b is: " . ($a**$b) . "<br>";

// Assignment

//$x = $a;
$a +=6;
echo "For x, value is " . $a . "<br>";

$a -=6;
echo "For x, value is " . $a . "<br>";

$a *=6;
echo "For x, value is " . $a . "<br>";

$a /=6;
echo "For x, value is " . $a . "<br>";

$a %=6;
echo "For x, value is " . $a . "<br>";

//Comparison 

$p = 7;
$s = 9;

echo "for x == y,result is: ";
echo var_dump($p == $s) ;
echo "<br>";

echo "for x > y,result is: ";
echo var_dump($p > $s) ;
echo "<br>";

echo "for x < y,result is: ";
echo var_dump($p < $s) ;
echo "<br>";

echo "for x <> y,result is: ";  // not equal to 
echo var_dump($p <> $s) ;
echo "<br>";


// Logical 

$m = true;
$n = false;

echo "for m and n,result is: ";  // you can use && also 
echo var_dump($m and $n) ;
echo "<br>";

echo "for m or n,result is: ";  // you can use || also
echo var_dump($m or $n) ;
echo "<br>";

echo "for !(m and n),result is: ";  
echo var_dump(!($m and $n)) ;
echo "<br>";












?>