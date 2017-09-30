<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	//Create connection

	$conn = new mysqli($servername,$username,$password);

	
	 //Create database

	$sql = "CREATE DATABASE C0705705_Damini";
	/*if ($conn->query($sql)===TRUE)
	{
		echo "Database created successfully. <br>";
	}
	else
	{
		echo "Error creating database:" . $conn->error;
	}*/
	




$sql = "Use C0705705_Damini";
/*if ($conn->query($sql)=== TRUE)
{
*/
	

$sql = "CREATE TABLE Employee_master("
."empId int(4) AUTO_INCREMENT primary kEY,"
."empName varchar(40),"
."gender varchar(6),"
."bod date,"
."address varchar(50),"
."city varchar(10),"
."province varchar(6),"
."postalcode varchar(6),"
."email varchar(20),"
."website varchar(10),"
."joiningdate date,"
."annualbasicpay decimal(6,2))";

/*if ($conn->query($sql)===TRUE)
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
*/
$sql = "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Damini','Female','24/11/1993','DonMillsRoad','Toronto','Ontario','M2J3C3','daminivakani10@gmail.com','www.gmail.com','01/01/2017','$10000');";
$sql .= "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Tushar','Male','06/07/1993','DonMillsRoad','Toronto','Ontario','M2J3C3','trdholakiya@gmail.com','www.gmail.com','02/02/2017','$15000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Chaitali','Female','24/09/1992','Markham','Toronto','Ontario','M2J3C5','chaitalip@gmail.com','www.facebook.com','03/03/2017','$10000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Ankur','Male','28/04/1991','Vanhorneavenue','Toronto','Ontario','M2J3C3','asbhatt@yahoo.com','www.linkedin.com','04/04/2017','$20000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Bhakti','Female','30/06/1997','godview','Toronto','Ontario','M2P2C3','aminbhakti@gmail.com','www.gmail.com','05/05/2017','$25000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Nandi','Female','28/11/1993','Senecahill','Toronto','Ontario','M2J3C0','nandi@gmail.com','www.gmail.com','06/06/2017','$11000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Avani','Female','20/10/1992','Finch','Toronto','Ontario','M9P3C3','mistrya@gmail.com','www.stake.com','07/07/2017','$13000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Karan','Male','10/08/1990','Mcnicol','Toronto','Ontario','A3J3C3','karans@gmail.com','www.gmail.com','08/08/2017','$15000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Dutt','Male','10/11/1991','Brmtn','Bramton','Ontario','M2J3N3','patel@gmail.com','www.localhost.com','09/09/2017','$25000');";
$sql .=  "INSERT INTO Employee_master (empName,gender,bod,address,city,province,postalcode,email,website,joiningdate,annualbasicpay) VALUES ('Nimmi','Female','01/05/1995','Sheppard','Toronto','Ontario','M2K2C3','nimmiJ@gmail.com','www.w3c.com','10/10/2017','$9000');";




/*if ($conn->multi_query($sql)===TRUE)
	{
		$last_id = $conn->insert_id;
		echo "New record inserted successfully. <br>";
	}
	else
	{
		echo "Error creating record :" . $conn->error;
	}
*/
	




$sql = "SELECT * FROM Employee_master;";
$result = $conn->query($sql);

	echo "<br> Total Records Fetched : " . mysqli_num_rows($result) . ". </br>";
	if(mysqli_num_rows($result)>0)
	{
		echo "<table border=1> <tr><th>Employee Id</th><th>Employee Name</th><th>Gender</th><th>Birthday Date</th><th>Address</th><th>City</th><th>Province</th><th>Postal code</th><th>Email</th><th>Website</th><th>Joining Date</th><th>Annual Basic Pay</th>";
		while($row = mysqli_fetch_row($result))
		{
			echo "<tr><td>" 
			. $row[0] . "</td><td> " 
			. $row[1] . "</td><td> " 
			. $row[2] . "</td><td> " 
			. $row[3] . "</td><td> " 
			. $row[4] . "</td><td> " 
			. $row[5] . "</td><td> " 
			. $row[6] ."</td><td> "
			. $row[7] ."</td><td> " 
			. $row[8] ."</td><td> " 
			. $row[9] ."</td><td> " 
			. $row[10] ."</td><td> " 
			. $row[11] ."</td></tr>";
		}
		echo "</table>";
	}

	

?>
