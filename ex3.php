<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Exchange the first and last characters in a given string and return the new string.</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
String : <input type="text" name="fname">
<br><br>
<input type="submit" name="submit">
<br>

<?php
$name = ($_POST['fname']);
$n = strlen($name)>1 ? substr($name, strlen($name)-1).substr($name, 1,strlen($name)-2).substr($name,0,1) : $name;

echo $n; 
?>
</form>
</body>
</html>