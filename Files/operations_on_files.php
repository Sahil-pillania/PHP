<?php

$fptr = fopen("files.txt", "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("files.txt"));
fclose($fptr);
echo $content;

?>