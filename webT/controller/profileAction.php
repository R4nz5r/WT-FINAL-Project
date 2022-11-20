<?php
    
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$isValid = true;
		//first name
		if (empty($_POST['fname'])) {
			echo "Please fill up first name properly";
			$isValid = false;
		}
		else {
			if (!filter_var($_POST['fname'])) {
				echo "Please correct your first name";
				$isValid = false;
			} 
		}
		//last name
		if (empty($_POST['lname'])) {
			echo "Please fill up last name properly";
			$isValid = false;
		}
		else {
			if (!filter_var($_POST['lname'])) {
				echo "Please correct your last name";
				$isValid = false;
			} 
		}
		//pp
		if (empty($_POST['pp'])) {
			echo "Please fill up profile picture properly";
			$isValid = false;
		}
		else {
			if (!filter_var($_POST['pp'])) {
				echo "Please correct your profile picture";
				$isValid = false;
			} 
		}
		//div
		if (empty($_POST['div'])) {
			echo "Please fill up divition properly";
			$isValid = false;
		}
		else {
			if (!filter_var($_POST['div'])) {
				echo "Please correct your divition";
				$isValid = false;
			} 
		}
		//dist
		if (empty($_POST['dist'])) {
			echo "Please fill up dist properly";
			$isValid = false;
		}
		else {
			if (!filter_var($_POST['dist'])) {
				echo "Please correct your dist";
				$isValid = false;
			} 
		}
		//pcode
		if (empty($_POST['pcode'])) {
			echo "Please fill up post code properly";
			$isValid = false;
		}
		else {
			if (!filter_var($_POST['pcode'])) {
				echo "Please correct your post code";
				$isValid = false;
			} 
		}




		if ($isValid) {
			echo sanitize($_POST['fname']);
			echo sanitize($_POST['lname']);
			echo sanitize($_POST['pp']);
			echo sanitize($_POST['div']);
			echo sanitize($_POST['dist']);
			echo sanitize($_POST['pcode']);
	
		}
		else {
			session_start();
			$_SESSION['msg'] = "Please fill up the form properly";
			header("Location: login.php");
		}
	}
	else {

		header("Location: error.php");
	}

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

