<?php

class File
{    
    public function __construct(public $file){}
    public function Write($data)
    {       
        $set = fopen("$this->file","w");
        fwrite($set, "$data");
        fclose($set);
    }
    public function Read()
    {
        $get = fopen("$this->file", "r");
        echo fread($get,filesize($this->file));
        fclose($get);
    }
}

$obj = new File("RaOouF.txt");
$obj -> Write("Ahmed RaoOuf");
$obj ->Read();