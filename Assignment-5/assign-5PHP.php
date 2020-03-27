<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<style type="text/css">
		body
		{
			background-color: #4DF912;
			text-align: center;
		}
		#div1
		{
			text-align: center;
			font-size: 20px;
			font-family: Arial, Helvetica, sans-serif;
			padding: 30px;
			margin-top: 40px;
		}
	</style>
</head>
<body>

<?php
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$lname=$_POST["lname"];
	$profession=$_POST["profession"];
	$country=$_POST["country"];
	$email=$_POST["email"];
	$mno=$_POST["mno"];
	$dob=$_POST["dob"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "collegetest";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO rnwwt (fname, mname, lname, profession, country, email, mno, dob)
	VALUES ('$fname', '$mname', '$lname', '$profession', '$country', '$email', '$mno', '$dob')";

	if ($conn->query($sql) === TRUE) {
	    $success="Registration Successfull.";
	} else {
	    $success="Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
<div id="div1">
	<p id="txt">
		<?php
			echo $success;
		?>
	</p>
</div>
</body>
</html>