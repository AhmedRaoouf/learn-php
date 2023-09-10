<?php
# 1
/*  OOP
1 - inheritance الوراثه
2 - Encapsulation التغليف
3 - abstraction التجريد
4 - polymorphism تعدد الاشكال
*/

namespace oop;

class User
{

    // varibles (properties)
    // public $name , $email,$age;

    //default value  
    public $type = 'user';

    // functions (methods) 
    public function greet()
    {
        echo "Hello user: $this->name ";
    }

    // magic method (dunder method)
    //automatic call after creating object

    //constructor property promotion php 8
    public function __construct(public $name, public $email, public $age)
    {
    }
    // before php 8
    // public $name , $email,$age;
    // public function __construct($name , $email,$age){
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->age = $age;
    // }

    //promote
    public function promote()
    {
        $this->type = "admin";
    }
    //incrementAge ()

    public function incrementAge($num)
    {
        $this->age += $num;
    }
}

echo "<pre>";

/* $user1 = new User;
print_r($user1);
echo "<br>";

$user1->name = "Ahmed";$user1->email = "Ahmed@gmail.com"; $user1->age = 26;
$user1->greet();$user1->promote();$user2->incrementAge(3);
print_r($user1);
echo "<br>"; */

$user2 = new User("Mohamed", "Mohamed@gmail.com", 20);
print_r($user2);
echo "<br>";
