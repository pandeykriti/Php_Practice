<html>

<?php
$user='root';
$pass='';
$db='aaa';
$con=mysqli_connect('localhost',$user,$pass,$db)or die("connection failed:" . mysqli_connect_error());
echo "Connection successfully";
$sql="INSERT INTO login(email,password)VALUES('john@example.com','12345')";

if(mysqli_query($con,$sql))
{
    echo "New records created successfully";
}
else
{
    echo "Error creating a database: " . mysqli_error($con);
}
?>

</html>
