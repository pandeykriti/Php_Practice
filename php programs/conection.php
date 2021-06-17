<?php
$user='root';
$pass='';

$con=mysqli_connect('localhost',$user,$pass) or 
   die("Connection failed: ". mysqli_connect_error());
echo "connected successfully";
?>


