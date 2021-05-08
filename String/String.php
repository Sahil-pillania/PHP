<?php

$name = "Sahil is a good boy";
echo $name;
echo "<br>";

echo "The length of my string is: " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "is");
echo "<br>";

echo str_replace("Sahil", "Smarty", $name);
echo "<br>";

echo str_repeat($name, 4);
echo "<br>";

echo "<pre>";
echo rtrim("    This is a good boy    ");
echo "</pre>";
//
echo "<pre>";
echo ltrim("    This is a good boy    ");
echo "</pre>";
?>