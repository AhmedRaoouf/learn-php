<?php

// using for inheritance only 
interface Shape
{
    public function area();
    public function diameter(); 
}

class Squre implements Shape
{
    public function __construct(private $len){}
    public function area(){
        return $this->len ** 2;
    }
    public function diameter(){
        return $this->len*4;
    }
}

$shape = new Squre(3);
echo $shape -> area();
echo "<br>";
echo $shape -> diameter();
echo "<br>";
class Circle  implements Shape 
{
    public function __construct(protected $len){}
    public function area(){
        echo 3.14 * $this -> len **2;
    }
    public function diameter(){
        echo 2*$this -> len*3.14;  
    } 
}
$shape2 = new Circle(7);
echo $shape2 -> area();
echo "<br>";
echo $shape2 -> diameter();