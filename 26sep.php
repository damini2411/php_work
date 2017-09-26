<!DOCTYPE html>
<html>
<head>
	<title>First page</title>
</head>
<body>

<h1> "Hello World" </h1>

<?php
$txt = "Hello!!!!!!!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


print "<h2>Tired!!!!!!!</h2>". "Toooomuch!!!!!!!!!!!!";
echo "<br>";

$str = "text message";

echo strlen($str);

echo "<br>";

define("Greeting", "php");
echo Greeting;

echo "<br>";

$myarray = array
("first","second","third");
for ($i =0;$i<2;$i++)
 { 
	echo '$myarray[' .$i. '] = '. $myarray[$i] ."<br>"; 
}
function getvalue()
{
	global $txt,$x,$y;
	echo "value for this function"."<br>";
	echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;

}

getvalue();

echo "value for this function"."<br>";
	echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "<br>";
echo "<br>";
//associative array
$grade = array("Damini" => "A", "Dutt" => "A+", "Chaitali" => "A-", "Ankur" => "A+");
foreach ($grade as $i => $i_value) {
	echo "$i". "seured grade". $i_value."<br>";
}

// multidimensional array
/*$stud = array(array("Damini",20,15),
		array("Chaitali",12,19),
		array("Dutt",20,20),
		array("Tushar,12,30")

		);

for($row =0;$row<4;$row++)
 {
 	for ($col=0; $col < ; $col++) { 
 		
 	}
	
}*/

$cars = array("volvo","BMw","Toyota");
ksort($cars);

$clength = count ($cars);
for($x = 0; $x < $clength; $x++)
{
	echo $cars[$x];
	echo "<br>";
}


?>

</body>
</html>