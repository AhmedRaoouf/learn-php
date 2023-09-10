<?php

// open new extention closed edit

class FrontEnd
{
    public function Send()
    {
       return "Learn JS";
    }
}
class BackEnd
{
    public function Send()
    {
       return "Learn PHP";
    }
}
class FullStack
{
    public function Send()
    {
       return "Learn JS and PHP";
    }
}
class Sender
{
    public function Send($data)
    {
       echo $data ->Send();
    }
}
$obj = new Sender;
$obj -> Send(new BackEnd);