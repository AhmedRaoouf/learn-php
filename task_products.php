<?php

abstract class Products
{
    public function __construct(protected $name, protected $price, protected $quantity)
    {
    }
    protected $discount = 0;
    abstract public function setDiscount();
    abstract public function printDiscount();
}

class Labtop extends Products
{
    public function setDiscount()
    {
        $this->discount = $this->price * 0.95;
        return $this;
    }
    public function printDiscount()
    {
        echo "labtop name: $this->name <br>
            Price: $this->price <br>
            Quantity: $this->quantity <br>
            Price after discount: $this->discount";
    }
}

class Mobile extends Products
{
    public function setDiscount()
    {
        $this->discount = $this->price * 0.9;
        return $this;
    }
    public function printDiscount()
    {
        echo "mobile name: $this->name <br>
            Price: $this->price <br>
            Quantity: $this->quantity <br>
            Price after discount: $this->discount";
    }
}

$obj = new Labtop("lab1",3000,50);
$obj -> setDiscount() -> printDiscount();
echo "<br>###############################<br>";
$obj2 = new Mobile("iphone11",1000,500);
$obj2 -> setDiscount() -> printDiscount();