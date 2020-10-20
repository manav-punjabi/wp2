<?php
// Create a blank image and add some text
$im = imagecreatetruecolor(200,200);
$text_color = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 25, 25, 90,  "Let's make it fun", $text_color);

// Set the content type header - in this case image/jpeg
header('Content-Type: image/jpeg');

// Output the image
//imagejpeg($im);

imagejpeg($im, 'simpletext.jpg');

// Free up memory
imagedestroy($im);
?>