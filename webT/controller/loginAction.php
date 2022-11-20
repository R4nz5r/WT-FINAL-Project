<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']==="POST"){
		$email = sanitize($_POST['email']);
		$pass = sanitize($_POST['pass']);
		$isValid = true;

		if(empty($email)){
			$_SESSION['email_error_msg']="Email can not be empty";
			$isValid=false;
		}
		if(empty($pass)){
			$_SESSION['pass_error_msg']="Password can not be empty";
			$isValid=false;
		}		
		if ($isValid === true) {
			$_SESSION['email_error_msg']="";
			$_SESSION['pass_error_msg']="";

			$isValid = false;
			//👌👌
			include '../model/loginDatabase.php';
			//👌👌
			if ($isValid) {
				$_SESSION['email'] = $email;
				header("Location: ../view/home.php");
			}
			else {
				$_SESSION['global_msg'] = "Email or password incorrect";
				header("Location: ../view/login.php");
			}				
		}
		else {
			header("Location: ../view/login.php");
		}		 
	}
	else {
		$_SESSION['global_msg'] = "Something went wrong";
		header("Location: ../view/login.php");
	}



	function sanitize($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}



?>