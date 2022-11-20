<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$fname = sanitize($_POST['fname']);
		$lname = sanitize($_POST['lname']);		
		$phone = sanitize($_POST['phone']);
		$email = sanitize($_POST['email']);
		$gender = sanitize($_POST['gender']);
		$dob = sanitize($_POST['dob']);
		$pass = sanitize($_POST['pass']);
		$isValid = true;
		if(empty($fname)){
			$_SESSION['fname_error_msg']="First name can not be empty";
			$isValid=false;
		}

		if(empty($lname)){
			$_SESSION['lname_error_msg']="First name can not be empty";
			$isValid=false;
		}

		if(empty($phone)){
				$_SESSION['phone_error_msg']="phone can not be empty";
				$isValid=false;
		}

		if(empty($email)){
			$_SESSION['email_error_msg']="Email can not be empty";
			$isValid=false;
		}

		if(empty($gender)){
			$_SESSION['gender_error_msg']="Gender can not be empty";
			$isValid=false;
		}

		if(empty($dob)){
			$_SESSION['dob_error_msg']="Date of birth can not be empty";
			$isValid=false;
		}
		 
		if(empty($pass)){
			$_SESSION['password_error_msg']="Password can not be empty";
			$isValid=false;
		}

		if($isValid === true){
			$_SESSION['fname_error_msg']="";
			$_SESSION['lname_error_msg']="";
			$_SESSION['phone_error_msg']="";
			$_SESSION['email_error_msg']="";
			$_SESSION['gender_error_msg']="";
			$_SESSION['dob_error_msg']="";
			$_SESSION['password_error_msg']="";
			//
			include '../model/registationDatabase.php';
		}
		else{
			header("Location: ../view/registation.php");
		}
		// 	if(isset($_POST['submit'])){
		// 		$fname =$_POST['fname'];
		// 		$lname =$_POST['lname'];
		// 		$phone =$_POST['phone'];
		// 		$email =$_POST['email'];
		// 		$gender=$_POST['gender'];
		// 		$dob =$_POST['dob']; 
		// 		$pass =$_POST['pass'];


				
		// 		$data=file_get_contents('../model/users.json');
		// 		$data_array=json_decode($data,true);
		
		// 		$data_new=array(
		// 		'fname'=>"$fname",
		// 		'lname'=>"$lname",
		// 		'phone'=>"$phone",
		// 		'email'=>"$email",
		// 		'gender'=>"$gender",
		// 		'dob'=>"$dob",
		// 		'user'=>"$user",
		// 		'password'=>"$password");
		// 		$data_array[]=$data_new;
		// 		$new_data=json_encode($data_array);
		// 		if(file_put_contents('../model/users.json',$new_data))
		// 		{
					 
		// 			header("Location: ../view/registation.php"); 
		// 			$_SESSION['reg_sus_msg']="Successfully Register";
		// 		}
		// 	}
		
		// 	// //
		// 	// $file = fopen("../model/users.json", "w");
		// 	// $data ="";
		// 	// if (empty($data)) {
		// 	// 	$content = array(array(
		// 	// 	'fname'=>"$fname",
		// 	// 	'lname'=>"$lname",
		// 	// 	'phone'=>"$phone",
		// 	// 	'email'=>"$email",
		// 	// 	'gender'=>"$gender",
		// 	// 	'dob'=>"$dob",
		// 	// 	'user'=>"$user",
		// 	// 	'password'=>"$password"));		
		// 	// 	$content = json_encode($content);
		// 	// 	fwrite($file, $content);
		// 	// 	$_SESSION['reg_sus_msg']="Successfully registration done";
		// 	// 	header("Location: ../view/login.php");
		// 	// }
		
		// 	// //        
			
		// }
	 


	}
	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>