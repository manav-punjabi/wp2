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
$sql = "CREATE TABLE hello(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50));";
if(mysqli_query($conn,$sql))
{
    echo "table is created";
}
else
{
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>