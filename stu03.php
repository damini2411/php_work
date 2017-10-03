<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
required 'oct04.php';


$s2 = new Employee();
$sData = [];

$s2-> setData(101, "PN");
$sData=$s2->getData();

foreach ($sData as $i)
{
	echo "$i <br>";
}

for ($i=0;$i<count($sData);$i++)
{
	echo $sData[$i] . "";
}
?>
</body>
</html>