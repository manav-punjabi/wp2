<?php
$server='localhost';
$username='root';
$password="";
$db="manav";
$conn= mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}
$sql = "SELECT id , firstname,lastname FROM hello";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
{
    echo "id:".$row['id']." Name: ".$row['firstname']." ".$row['lastname']."<br>";
}
}
else
{
    echo "Error no records present " . mysqli_error($conn);
}
mysqli_close($conn);
?>

