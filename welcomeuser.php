<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

<?php
	$errName = "";
	$name="";
	$errEmail="";
	$email="";
	$erraddress="";
	$address="";
	$errRd="";
	$rdo1checked=$rdo2checked=$rdo3checked="";
	$tech = array();

	if ($_SERVER["REQUEST_METHOD"]== "POST")
	{
		if (isset($_POST["name"]))
		{
			if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))
			{
				$errName= "Only letters and white space allowed";
			}
			else
			{
			$name=$_POST["name"];
			}
		}
		if (empty($_POST["name"]))
		{
			$errName="Please Enter Name.";
		}
	}
	
	if (empty($_POST["email"])) 
	{
    $errEmail = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errEmail = "Invalid email format"; 
    }
  }

		
	
	if ($_SERVER["REQUEST_METHOD"]== "POST")
	{
		if (isset($_POST["address"]))
		{
			$name=$_POST["address"];
		}
		if (empty($_POST["address"]))
		{
			$erraddress="Please Enter address.";
		}
	}

	if (isset($_POST["rd"]))
	{
		if($_POST["rd"]=="Weekly")
		{
			$rdo1checked="checked";
		}
		else if($_POST["rd"]=="Monthly")
		{
			$rdo2checked="checked";
		}
		else if ($_POST["rd"]=="Ocassionaly")
		{
			$rdo3checked="checked";
		}
		else
		{
			$errRd="Please select any one option.";
		}

	}

	if(isset($_POST["tech"]))
	{
		$tech = $_POST["tech"];
	}

	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!--
welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST ["email"]; ?>. -->
<form name="mForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label>Name</label>
<input type="text" name="name" placeholder="Enter Name" value="<?php echo htmlspecialchars($name);?>">
<span class="error"><?php echo $errName; ?></span>
<br><br>

<label>Address</label>
<input type="textarea" name="address" value="<?php echo htmlspecialchars($name);?>" >
<span class="error"><?php echo $erraddress; ?></span><br><br>

<label>Email</label>
<input type="text" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($name);?>"><span class="error"><?php echo $errEmail; ?></span> <br><br>

<label>LinkedIn Profile</label>
<input type="text" name="linkedinprofile" placeholder="Enter your LinkedIn profile URL"><br><br>

<label>which technology you are interested in?</label>
<select>

		<option value="">PHP</option>
		<option value="R">Java</option>
		<option value="Square">Android</option>
		<option value="Rectangle">ios</option>
		<option value="Custom">shell Scripting</option>
		</select><br><br>

<select name="tech[]" size="5">
<!--<?php

$techList = array("PHP","Java","Android","ios","shell Scripting");
$cnt = count($techList);

for ($i=0; $i <$cnt; $i++) { 
	echo '<option value="'. $techList[$i].'"';

	if(in_array($techList[$i] , $tech))
	{
		echo "Selected";
	}

	echo '>' . $techList[$i] . '</option>';
}
?>
	
</select>-->

<label>Would you like to subscribe our newsletter?</label><input type="checkbox" name="info" id="check" value="yes" ><br><br>

<label>How frequent do you want the newsletter?</label>
<input type="radio" name="rd" value="Weekly" <?php echo htmlspecialchars($rdo1checked);?>> Weekly
<input type="radio" name="rd" value="Monthly"<?php echo htmlspecialchars($rdo2checked);?>>Monthly
<input type="radio" name="rd" value="Ocassionaly"<?php echo htmlspecialchars($rdo3checked);?>>Ocassionaly<br>
<span class="error"><?php echo $errRd; ?></span><br><br>
<button type="submit" class="button" >SUBMIT</button>
</form>
</body>
</html>