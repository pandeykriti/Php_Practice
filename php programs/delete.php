<html>

<?php
$user='root';
$pass='';
$db='aaa';
$con=mysqli_connect('localhost',$user,$pass,$db)or die("connection failed:" . mysqli_connect_error());
echo "Connection successfully";
$sql="DELETE FROM login WHERE email like 'J%'";

if(mysqli_query($con,$sql))
{
    echo " deleted successfully";
}
else
{
    echo "Error deleting a database: " . mysqli_error($con);
}
?>

</html>
