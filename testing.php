<?php
$color="red";
echo "My car is".$color."<br>";

$txt="Hello World";
$x="Hi";
$s="Hola";
echo $txt.'<br>';
echo $x.'<br>';
echo $s.'<br>';

$txt1="world wide web";
echo "I like $txt1";
echo '<br>';

$x1=100;
$x2=110;
echo $x1 + $x2;
echo '<br>';

$x=8;
function mytest(){
}
mytest();
echo "variable outside the function is $x";
echo '<br>';

function test(){
	$x=2;
	echo "variabes inside the function is $x";
}
test();
echo '<br>';

$x = 10;
$y = 15;
function tt(){
	global $x, $y;
	$y = $x + $y;
}
tt();
echo $y;
echo '<br>';

function kk(){
	static $x=0;
	echo $x;
	$x++;
}
kk();
echo '<br>';
kk();
echo '<br>';
kk();
echo '<br>';

$t1="learn php";
$t2="learn java";
$a=2;
$b=2;
echo "<h2>$t1</h2>";
echo "<h2>$t2</h2>";
echo $a + $b;
echo '<br>';
//string//
$x="Global warming";
$y="Deforestation";
echo $x;
echo '<br>';
echo $y;
echo '<br>';
//integer//
$q=10000;
var_dump($q);
echo '<br>';
//array//
$cars= array("bmw","toyota","hijet");
var_dump($cars);
echo '<br>';
//object//
class car{
	function car(){
		$this->model="VW";
	}
}
$her=new car();
echo $her->model;
echo '<br>';

//Null//
$p="Hi";
$p=null;
var_dump($p);
echo '<br>';

// string function //
$h="My Name is sansanwutthmone";
echo strlen($h);
echo '<br>';

// word count //
$s="My Name is sansanwutthmone";
echo str_word_count($s);
echo '<br>';

// reverse string //
$s="My Name is sansanwutthmone";
echo strrev($s);
echo '<br>';

//search text within string//
echo strpos("My Name is sansanwutthmone","is");
echo '<br>';

//replace string//
echo str_replace("making","doing","How are you making");
echo '<br>';

//check variables//
$a=12345;
var_dump(is_int($a));
echo '<br>';

//numeric string//
$n=1234567;
var_dump(is_numeric($n));
echo '<br>';
$n=6.7;
var_dump(is_numeric($n));
echo '<br>';

//flot to int//
$c=1234.5;
$int=(int)$c;
echo $int;
echo '<br>';

//string to int//
$c="12345";
$str_int=(int)$c;
echo $str_int;
echo '<br>';

//math//
echo (pi());
echo '<br>';

//min//
echo (min(0,1,2,3,45,6));
echo "<br>";

//max//
echo (max (1,27,348736,44675,9087));
echo "<br>";

//abs//
echo (abs(-0.456));
echo "<br>";

//random numbers//
echo (rand());
echo "<br>";

//constants//
define("hello","welcome home",false);
echo hello;
echo "<br>";

//constant arrays//
define("cars",["Alfa","BMW","Toyota"]);
echo (cars[0]);
echo "<br>";
//constant global//
define("greeting","welcome to myanmar");
function m(){
	echo greeting;
}
m();
echo "<br>";
echo "<br>";

//date//
$r=date('H');
if ($r<10) {
	echo "Have a good morning";
}else if ($r<20) {
	echo "Have a good day";
}else{
	echo "Have a good night";
}
echo "<br>";


//switch case//

$favcolor = "white";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";

//while loop//
$o=1;
while ($o<=5) {
	echo "The numer is $o <br>";
	$o++;
}
echo "<br>";

//loop//
$rat=0;
while ($rat<=100) {
	echo "The number is $rat<br>";
	$rat+=10;
}
echo "<br>";

//for loop//
for($i=0;$i<=11;$i++){
	echo "The number is $i <br>";
}
echo "<br>";

//for each//
$colors = array("red","blue","yellow");
foreach ($colors as $value) {
	echo "$value<br>";
}
echo "<br>";

//function//
function familyname($fname){
	echo "$fname Refsnes.<br>";
}
familyname("Sansan");
familyname("Wutthmone");
familyname("Rap");
familyname("monster");
echo "<br>";

//adding two numbers//
function add(int $z,int $g){
	return $z+$g;
}
echo add(5,15);
echo "<br>";
echo "<br>";
//loop through an indexed array//
$items = array("book","pen","ruler");
$arrlength = count($items);
for ($d=0; $d < $arrlength; $d++) { 
	echo $items[$d];
	echo "<br>";
}
?>
