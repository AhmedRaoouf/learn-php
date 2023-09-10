<?php

// error_reporting(E_WARNING | E_ERROR);
// error_reporting(E_ALL & ~E_WARNING);
error_reporting(~E_ALL);

//waring
include "anything.php"; // wrong path 

$num = [1,2];
echo $num[3]; // undifined element in array

//pasre error 
echo "done"

// Fatal error
test();
echo "OK";



