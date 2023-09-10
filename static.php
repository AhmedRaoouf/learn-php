<?php
// static class
// can call class without made new obj from class
class Str 
{
    public static $num = 3;
    public static function uppercaseFirst($str)
    {
        echo self::$num;
        echo "<br>";
        return ucfirst($str);
        
    }
}

$name = "ahmed abdelraouf";
// :: scope resolution operator
echo Str:: uppercaseFirst($name);
echo "<br>";
echo Str:: $num;