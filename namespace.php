<?php
 
 //name collision ---------> solved by namespaces
require_once "inheritance.php";
require_once "oop.php";

// (use  as) when have two class with the same name
use inherit\User as Iuser;
use oop\User as Ouser;

$Raouf = new Iuser("ahmed","ahmed@gmail.com",20);
$ahmed = new Ouser("ali","ali@gmail.com",50);
