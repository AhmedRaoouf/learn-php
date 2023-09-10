<?php

function printUserData($name,$age)
{
    if ($age < 0 ) {
        throw new Exception("age is not avilable");
        
    }else{
        echo "your name is $name and age is $age <br>";
    }
}

try {
    printUserData("ali",15);
    printUserData('ahmed',-12); // output: age is not avilable
} catch (Exception $exp) {
    echo $exp ->getMessage() . "<br>";
    $msg = $exp ->getMessage() . " " .date("Y/m/d h:m:i") ."\n";
    error_log($msg,3,"error.txt");
    die();
}
echo "goodbye";