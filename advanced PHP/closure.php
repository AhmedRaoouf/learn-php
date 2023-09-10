<?php

// closures (anonymous functions )
$name = "Ahmed";
$greet = function () use ($name)
{
    echo "Hello $name <br>";
};
// echo "<pre>";
// print_r($greet);
$greet();

// used in callback function

function printData(int $amount , callable $discount)
{
    $dis = $discount($amount);
    echo "The amount is $amount and discount = $dis <br>";
}

$dis1 = function ($amount){
    return $amount*0.05 ;
};
printData(1000,$dis1);

$dis2 = function ($amount){
    return $amount * 0.1;
};
printData(1000,$dis2);