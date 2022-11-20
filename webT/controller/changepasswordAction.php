<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {	 
		echo $_POST['email'];
		echo $_POST['cpassword'];
		echo $_POST['newpassword'];
		echo $_POST['rtpassword'];  
	}
	else {

		header("Location: error.html");
	}
?>