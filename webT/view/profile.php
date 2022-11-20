<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?> 
<!DOCTYPE html>
<html>
    <head>
    <title>Profile</title>
    <style>
                body {background-color:rgba(195,169,255,255);}
                h1   {color: rgba(252,252,255,255);}
                h4  {color: rgba(252,252,255,255);} 
                form {color: rgba(4,38,76,255);}            
        </style>
    </head>

    <body>
    <?php include 'header.php'; ?>
    <br><br>
    <h1 style="text-align:center;">Profile</h1>
    <form style="text-align: center;" novalidate>
        
    <table align="center">
         
        <tbody>
            <?php
                 $conn=mysqli_connect("localhost","root","","lms");
                 if(!$conn){
                     die("Sorry we failed to connect".mysqli_connect_error());
                 }
                 else{

                    $sql ="select * from registation"; 
                    $query=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($query);
                     
                   
                    while ($res=mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>First Name   :<?php echo $res['fname'];?></td>
                        </tr>
                        <tr>
                            <td>Last  Name   :<?php echo $res['lname'];?></td>
                        </tr>
                        <tr>
                            <td>Phone Number   :<?php echo $res['phone'];?></td>
                        </tr>
                        <tr>
                            <td>Email ID   :<?php echo $res['email'];?></td>
                        </tr>
                        <tr>
                            <td>Gender   :<?php echo $res['gender'];?></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth   :<?php echo $res['dob'];?></td>
                        </tr>
                           

                         <?php
                        }
                     
                  }     
            ?>  
        </tbody>
    </table>  
    </form> 
    <br><br><br><br><hr>
    <?php include 'footer.php'; ?>      
    </body>
</html>