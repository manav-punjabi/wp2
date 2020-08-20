<?php
function myfun(){
    $x=$_POST['ans'];
if ($x=="yes"){
    echo $_POST["name"]."<br>";
    echo $_POST['Rollno'];
    echo "<br>";
    echo "zoology"."<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo implode(" ",$_POST['check']);
    echo "<br>";
    echo $_POST['ans'];
}
else{
    echo $_POST["name"]."<br>";
    echo $_POST['Rollno'];
    echo "<br>";
    echo $_POST['subject']."<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo implode(" ",$_POST['check']);
    echo "<br>";
    echo $_POST['ans'];
}
}
myfun();

?>