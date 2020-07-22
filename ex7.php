<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter number1 : <input type="text" name="num1"><br><br>

<input type="submit" name="submit">
<br>
<br>

<?php
	$number1= $_POST ["num1"];
	

echo "$number1";

echo "<br>";
echo "Final Result:";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $number1=$_POST["num1"];
 
}
echo chunk_split($number1,2,",");


?>

</body>
</html>