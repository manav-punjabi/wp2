<?php
$x=$_POST['name'];
function fact($x){
if ($x==1){
return 1;
}
return $x*fact($x-1);
}
$ans=fact($x);
echo "factorail is ".$ans;
?>