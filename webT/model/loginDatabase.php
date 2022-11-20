<?php
    	$conn = mysqli_connect("localhost", "root", "", "lms");

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
     
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, "Select id, email, pass From registation");
        //mysqli_stmt_bind_param($stmt,"ss",$email, $pass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt,$id, $em, $pa);
        mysqli_stmt_fetch($stmt);

        if ($email === $em and $pass === $pa) {
            $isValid = true;
        }
        else {
            $_SESSION['global_msg'] = "No record(s) found. Please contact with the administrator";
            header("Location: ../view/login.php");
        }
        mysqli_close($conn);
 
?>