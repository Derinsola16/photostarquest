<?php

//Database Connection
$dbconn = new mysqli('localhost', 'root', '', 'delaquine');

if ($dbconn->connect_error) {
	die("Connection Failed: " . $dbconn->connect_error);
}
//Database Connection ends


//Script for Registration
//inserting into db
if (isset($_POST['vote'])) {
	$sql = "INSERT INTO result(fullname,email,housemate,phonenumber)
                        VALUES('" . $_POST["fullname"] . "','" . $_POST["email"] . "','" . $_POST["housemate"] . "','" . $_POST["phonenumber"] . "')";


	if ($dbconn->query($sql) === true) {
		session_start();
		//	echo"<script>alert('Thanks for Voting')</script>";
	} else {
		//echo "Error: " . $sql . "<br/>" . $dbconn->error;
	}
}
//mysqli_close($dbconn);

?>