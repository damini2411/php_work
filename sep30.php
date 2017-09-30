<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "demo";

	//Create connection

	$conn = new mysqli($servername,$username,$password);

	// Check connection

	if ($conn->connect_error)
	{
		die("connection failed:" . $conn->connect_error);
	}
	else
	{
		echo "connection sucessful<br>";
	}

	// Create database

	/*$sql = "CREATE DATABASE demo";
	if ($conn->query($sql)===TRUE)
	{
		echo "Datebase created successfully. <br>";
	}
	else
	{
		echo "Error creating database:" . $conn->error;
	}*/




$sql = "Use demo";
if ($conn->query($sql)=== TRUE)
{

	/*

$sql = "CREATE TABLE student("
."stuId int(4) AUTO_INCREMENT primary kEY,"
."stuName varchar(40),"
."gender varchar(6),"
."age int(2))";

if ($conn->query($sql)===TRUE)
	{
		echo "Table created successfully. <br>";
	}
	else
	{
		echo "Error creating Table :" . $conn->error;
	}

}
else
{
	echo "Error connecting database:" . $conn->error. "<br>";
}	

$sql = "INSERT INTO student (stuName,gender,age) VALUES ('Damini','Female','24');";
$sql .= "INSERT INTO student (stuName,gender,age) VALUES ('Tushar','male','24');";
$sql .=  "INSERT INTO student (stuName,gender,age) VALUES ('Chaitali','Female','24');";




if ($conn->multi_query($sql)===TRUE)
	{
		$last_id = $conn->insert_id;
		echo "New record inserted successfully. <br>";
	}
	else
	{
		echo "Error creating record :" . $conn->error;
	}

	

*/


$sql = "SELECT * FROM student;";
$result = $conn->query($sql);

	echo "<br> Total Records Fetched : " . mysqli_num_rows($result) . ". </br>";
	if(mysqli_num_rows($result)>0)
	{
		echo "<table border=1> <tr><th>Student Id</th><th> Name</th><th>Gender</th><th>Age</th>";
		while($row = mysqli_fetch_row($result))
		{
			echo "<tr><td>" . $row[0] . "</td><td> " . $row[1] . "</td><td> " . $row[2] . "</td><td> " . $row[3]. "</td></tr>";
		}
		echo "</table>";
	}
}
	// Insert using prepared

$stmt = $conn->prepare("INSERT INTO student(stuName,gender,age) VALUES(?, ?, ?)");

$stmt->bind_param("ssi", $stuName, $gender, $age); 

$stuName = "Jay";
$gender = "male";
$age = 7;
$stmt->execute();

$stuName = "Raj";
$gender = "male";
$age = 17;
$stmt->execute();

$stuName = "priya";
$gender = "female";
$age = 27;
$stmt->execute();


//$stmt->close();


?>
