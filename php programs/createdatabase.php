<html>

<?php
$user='root';
$pass='';
$db='aaa';
$con=mysqli_connect('localhost',$user,$pass)or die("connection failed:" . mysqli_connect_error());
echo "Connection successfully";

$sql="CREATE DATABASE aaa";
if(mysqli_query($con,$sql))
{
    echo "Database created successfully";
}
else
{
    echo "Error creating a database: " . mysqli_error($con);
}
?>

</html>
