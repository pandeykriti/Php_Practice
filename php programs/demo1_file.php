<?php
class Emp{
    public $name="";
    public $age="";
    public $city="";
}
$myObj=new Emp();
$myObj->name="John";
$myObj->age=30;
$myObj->city="New York";

$myJSON=json_encode($myObj);
echo $myJSON;
?>