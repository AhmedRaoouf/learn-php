<?php

// inheritance
namespace inherit;

class User
{

    public $name,  $email, $age;

    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function greet()
    {
        echo "Hello user: $this->name <br>";
    }
}

echo "<pre>";
$user1 = new User("ahmed", "ahmed@gmail.com", 21);
print_r($user1);

// Techer inherit from User using extends
class Techer extends User
{
    public $subject;
    // you can overridden the parent
    public function greet()
    {
        echo "Hello Techer: $this->name <br>";
    }
}

$user2 = new Techer("ali", "ali@gmail.com", 21);
$user2->subject = "Back End";
print_r($user2);
$user2->greet();
