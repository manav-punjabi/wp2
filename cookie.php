<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = $_POST['name'];
$choice=$_POST['choice'];
if ($choice == "create")
{
    setcookie($cookie_name, $cookie_value, time() + (60), "/");
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
   } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
   }
}
else{
    setcookie($cookie_name, " ", time() - (3600), "/");
    echo "cookie is deleted";
}

?>
<html>
<body>




</body>
</html>