<!DOCTYPE html>
<html>
<head>
	<title> Student form </title>
</head>
<body>
<?php include 'stuformphp.php' ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name :<input type="text" name="fname"><br><br>
Email : <input type="email" name="fmail"><br><br>
Phone :<input type="phone" name="fphone"><br><br>

<label> Township : </label>
<select name="township" id="township">
  <option value="yangon">Yangon</option>
  <option value="mandalay">Mandalay</option>
  <option value="naypyitaw">NayPyiTaw</option>
  <option value="hpa-an">Hpa-An</option>
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
  
  $email =  htmlspecialchars($_REQUEST['fmail']);
  
  $phone =  htmlspecialchars($_REQUEST['fphone']);

  $township = $_POST['township'];

  $select_radio = $_POST['grade'];
      
  $select_checkbox = $_POST['sub'];
  

  $arr=array("Name"=>$name,"Email"=>$email,"Phone"=>$phone,"Township"=>$township,"Grade"=>$select_radio,"Subjects"=>$select_checkbox);
  $result=json_encode($arr);

  $myfile = fopen("stu.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $result."\n");
            fclose($myfile);
            
    
    }
    // echo "$name";
    // echo "$email";
    // echo "$phone";
    // echo "$township";
    // echo "$select_radio";
    // echo "$select_checkbox"; 
?>
</body>
</html>


