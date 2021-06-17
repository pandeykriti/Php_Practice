<html>
<body>
<?php
$username="root";
$password="";
$db="aaa";
$servername="localhost";

$con=mysqli_connect($servername,$user,$pass,$db)or die("connection failed:" . mysqli_connect_error());
echo "Connection successfully";
$sql="SELECT email,password FROM login";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "email" .$row["email"]. " - pass: " .$row["password"] ."<br>";
    }
}
else
{
    echo "0 results";
}
?>
</body>
</html>
