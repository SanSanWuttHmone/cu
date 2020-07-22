<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Convert Initial Character to Upper of lower input string without using built-in method</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter Text : <input type="text" name="fname">
<br>
<input type="submit" name="submit">
<br>

<?php
	$name = ($_POST['fname']);
	$n=strtoupper($name);
	echo $n;

?>
</form>
</body>
</html>