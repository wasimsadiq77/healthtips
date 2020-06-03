<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $doctorname = $_POST['doctorname'];
	 $type = $_POST['type'];
	 $problem = $_POST['problem'];
	 $symptoms = $_POST['symptoms'];
	 $age = $_POST['age'];
	 $since = $_POST['since'];
	 $sql = "INSERT INTO complaint (username,email,doctorname,type,problem,symptoms,age,since)
	 VALUES ('$username','$email','$doctorname','$type','$problem','$symptoms','$age','$since')";
	 if (mysqli_query($link, $sql)) {
		echo "New record created successfully !";
		header("location: home.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($link);
	 }
	 mysqli_close($link);
}
?>