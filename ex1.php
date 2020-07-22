<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3> New string with the last char added at the front and back of a given string of length 1 or more.</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter your text : <input type="text" name="fname"><br><br>
<input type="submit" name="submit">
<br>

<?php

	$name = ($_POST['fname']);
	$n=substr($name, strlen("$name")-1);
	echo $n.$name.$n;
?>

</body>
</html>