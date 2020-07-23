<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1px solid black" width="200px" height="200px" style="border-collapse: collapse;">
	<?php
	for ($i=1; $i<=8 ; $i++) { 
		echo "<tr>";
	
	for ($j=1; $j <=8 ; $j++) { 
		$res = $i+$j;
		if ($res%2==0) {
			echo "<td width=30px height30px bgcolor=black></td>";
			
		}else
		{
		echo "<td width=30px height30px bgcolor=white></td>";
	}
	}
	echo "</tr>";
}
	?>
</table>
</body>
</html>