<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>calculate and print the factorial of a number using a for loop</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter number : <input type="text" name="fnum"><br>
<input type="submit" name="submit">
<br>

<?php
	$num = ($_POST['fnum']);
	$fact = 1;
	for ($i=1; $i<=$num ; $i++) { 
		$fact=$fact*$i;
	}
	echo "The factorial of $num is $fact";


?>
</body>
</html>