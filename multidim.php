<?php 

 

$subject = array ( 

    array("Subject","Marks","Out OF"), 

    array("Python",70,100), 

    array("Web Programming",65,100), 

    array("Data Networking",77,100), 

    array("Cyber Security",58,100) 

  ); 

?> 

 
 

<table border="3" width="300"> 

    <?php 

for ($row = 0; $row < 4; $row++)  

{ 

  echo "<tr>"; 

  for ($col = 0; $col < 3; $col++)  

  { 

    echo "<td>".$subject[$row][$col]."</td>"; 

  } 

  echo "</tr>"; 

} 

 

    ?> 

</table> 
