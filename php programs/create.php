<html>

<?php
$user='root';
$pass='';
$db='aaa';
$con=mysqli_connect('localhost',$user,$pass,$db)or die("connection failed:" . mysqli_connect_error());
echo "Connection successfully";
$sql="CREATE TABLE login(email varchar(10),password varchar(30))";

if(mysqli_query($con,$sql))
{
    echo "Table created successfully";
}
else
{
    echo "Error creating a database: " . mysqli_error($con);
}
?>

</html>
