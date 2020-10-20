<?php
$server='localhost';
$username='root';
$password="";
$db="user";
$conn= mysqli_connect($server,$username,$password,$db);
$u=$_POST['uname'];
$p=$_POST['pass'];
$e=$_POST['email'];

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}
$sql = "INSERT INTO user (username, password , email)
VALUES ('$u', '$p', '$e')";
if(mysqli_query($conn,$sql))
{
    echo "record is inserted"."<br>";
}
else
{
    echo "Error creating table: " . mysqli_error($conn);
}
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}
$sql = "SELECT username , password ,email FROM user";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
{
    echo "uname:".$row['username']." password: ".$row['password']." email: ".$row['email']."<br>";
}
}
else
{
    echo "Error no records present " . mysqli_error($conn);
}
mysqli_close($conn);
?>
