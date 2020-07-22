<!DOCTYPE html>
<html>
<head>
	<title> Student form </title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name :<input type="text" name="fname"><br><br>
Email : <input type="email" name="fmail"><br><br>
Phone :<input type="phone" name="fphone"><br><br>

<label> Township : </label>
<select name="township" id="township">
  <option value="ygn">Yangon</option>
  <option value="man">Mandalay</option>
  <option value="nay">NayPyiTaw</option>
  <option value="hpa">Hpa-An</option>
</select>
<br><br>

  <input type="radio" name="grade" value="First Year">
   <label for="grade">First year</label><br>
 
  <input type="radio" name="grade" value="Second Year">
   <label for="grade">Second year</label><br>
  
  <input type="radio" name="grade" value="Third Year">
  <label for="grade">Third year</label><br>
  
  <input type="radio" name="grade" value="Fourth Yearr">
  <label for="grade">Fourth year</label><br>
  
    <input type="radio" name="grade" value="Fifth Year">
    <label for="grade">Fifth year</label><br><br>
 
  <input type="checkbox" name="sub" value="Object Oriented Programming" >
  <label for="sub1"> Object Oriented Programming </label><br>
  <input type="checkbox" name="sub" value="Marketing Strategy">
  <label for="sub2"> Marketing Strategy </label><br>
  <input type="checkbox" name="sub" value="Human Resources">
  <label for="sub3"> Human Resources </label><br>
  <input type="checkbox" name="sub" value="J2EE">
  <label for="sub4"> J2EE </label><br>
  <input type="checkbox" name="sub" value="Javascript">
  <label for="sub1"> Javascript </label><br><br>

  <input type="submit" value="submit">

</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = htmlspecialchars($_REQUEST['fname']);
	echo $name;
	echo "<br>";
	$email =  htmlspecialchars($_REQUEST['fmail']);
	echo $email;
	echo "<br>";
	$phone =  htmlspecialchars($_REQUEST['fphone']);
	echo $phone;
	echo "<br>";

	if(isset($_POST['township'])){
    $township = $_POST['township'];
    switch ($township) {
        case 'ygn':
            echo 'Yangon<br/>';
            break;
        case 'man':
            echo 'Mandalay<br/>';
            break;
        case 'nay':
            echo 'NayPyiTaw<br/>';
            break;
        case 'hpa':
            echo 'Hpa-An<br/>';
            break;

        default:
           echo "Nothing";
            break;
    }
}

    $select_radio = $_POST['grade'];
    echo $select_radio;
    echo "<br>";

    $select_checkbox = $_POST['sub'];
    echo $select_checkbox;

	}
?>
</body>
</html>