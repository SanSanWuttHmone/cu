<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Create a new string taking the first 3 characters of a given string and return the string with the 3 characters added at both the front and back. If the given string length is less than 3, use whatever characters are there</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter string : <input type="text" name="fname">
<br>
<input type="submit" name="submit">
<br>

<?php 
	$name = ($_POST['fname']);
	if(strlen($name)<3)
	{
		echo $name.$name.$name;
	}else{
		$name1=substr($name, 0,3);
		echo $name1.$name.$name1;
	}


?>
</body>
</html>