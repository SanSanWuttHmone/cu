<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3> Show number of 1 to 100 in table format</h3>
<table  border="1" cellpadding="3" cellspacing="0">
<?php

for($i=1;$i<=10;$i++)
{
echo "<tr>";
for ($j=0;$j<=10;$j++)
  {
      $result=$i*$j;
  echo "<td>$result</td>";
  }
  echo "</tr>";
  }
 
?>
   </table> 
</body>
</html>