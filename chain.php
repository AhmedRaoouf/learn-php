<?php

// Method chaining
class Number{
    private $num;
    public function getNum($num){
        $this->num = $num;
        return $this;
    }
    public function mulTwo(){
        $this->num *= 2;
        return $this;
    }
    public function addTwo(){
        $this->num += 2;
        return $this;
    }
    public function print(){
        echo $this->num;
    
    }
}
$obj = new Number;
// to use method chaining should use (return $this;) in function
$obj->getNum(3)->addTwo()->mulTwo()->print();
