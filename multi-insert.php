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
$sql = "INSERT INTO hello (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO hello (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO hello (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";
if(mysqli_multi_query($conn,$sql))
{
    echo "records are inserted";
}
else
{
    echo "Error inserting records: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

