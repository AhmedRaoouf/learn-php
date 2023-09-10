<?php

class Database
{
    public function __construct(public $tableName){}

    public function connect()
    {
        $conn = new mysqli("localhost", "root", "", "SB_admin2");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->set_charset("utf8");
        return $conn;
    }

    public function readAll()
    {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM $this->tableName");
        while ($row = $result->fetch_assoc()) {
            print_r($row);
        }
    }

    public function read($property, $value)
    {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM $this->tableName WHERE $property = '$value'");
        if ($result->num_rows > 0) {
            print_r($result->fetch_assoc());
        } else {
            echo "No records found.";
        }
    }

    public function update($id, $data)
    {
        $conn = $this->connect();
        $set = implode(',', array_map(fn($k, $v) => "$k='$v'", array_keys($data), $data));  
        $updateQuery = "UPDATE $this->tableName SET $set WHERE id=$id";
        echo $conn->query($updateQuery) ? "Record updated successfully" : "Error updating record: " . $conn->error;
    }
}
echo "<pre>";
$obj = new Database('products');
$obj->read('price',500);
echo "<br>###################<br>";
$obj2 = new Database("admins");
$obj2->readAll();
$obj2->update(1, ['Name' => 'Ahmed RaOouf', 'password' => md5('123456')]);

