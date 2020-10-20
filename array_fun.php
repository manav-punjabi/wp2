<?php
$name='Betty';
$arr=array("Patrick"=>"35,000", "Betty"=>"37,000", "Joy"=>"43,000");
$arr1=array(12,34,35,15);
function salary($name)
{
  global $arr;
  return $arr[$name];
}
echo $name." has a salary of ".salary($name)."$/-";

sort($arr1);
$len = count($arr1);
for($x = 0; $x < $len; $x++) {
  echo "<br>";
  echo $arr1[$x];
}
ksort($arr);
echo "<br>".print_r($arr);
$x=5;
function fact($x){
if ($x==1){
return 1;
}
return $x*fact($x-1);
}
$ans=fact($x);
echo "<br>factorail is ".$ans;
$i=1;
$fact=1;
do{
   $fact=$fact*$i;
   $i++;
   }while($i<=5);
echo "factorial is ".$fact;
?>