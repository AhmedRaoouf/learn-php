<?php

// abstract
//used for inhert only can not take objects direct from (abstract class)
abstract class User {

    public function __construct(public $name , public $email,public $age){
        
    }

    public function greet() 
    {
        echo "Hello user: $this->name <br>";
    }
    //redirect the childern 
    // لازم تنشئ داله اسمها setData() اما تورث منه
    abstract public function setData($data);
    
}

class Techer extends User{
    public $subject;
    // you can overridden the parent
    public function greet() 
    {
        echo "Hello Techer: $this->name <br>";
    }
    public function setData($data){
        //code...
    }
}