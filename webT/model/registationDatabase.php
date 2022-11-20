<?php
     $conn=mysqli_connect("localhost","root","","lms");
     if(!$conn){
         die("Sorry we failed to connect".mysqli_connect_error());
     }
     else{
        $stmt = $conn->prepare("INSERT INTO registation (fname,lname,phone,email,gender,dob,pass) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss", $fname, $lname, $phone, $email, $gender, $dob, $pass);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../view/registation.php");
     }
?>