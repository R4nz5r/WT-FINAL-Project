<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>registation</title>
        <style>
                body {background-color:rgba(195,169,255,255);}
                h1   {color: rgba(252,252,255,255);}  
                form {color: rgba(4,38,76,255);}            
        </style>
         

    
    <body style="text-align:center;">

        <h1 style="text-align: center;">Registation From</h1>
    <form style="text-align: center;" class="" action="../controller/registationAction.php" method="post" enctype="multipart/from.data" novalidate>
        <table align="center">
            <tr>
                <td>
                <label for="fname">First Name:</label>
                </td>
                <td>
                <input type="text" placeholder="First Name" name="fname" id="fname">
                </td>
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['fname_error_msg']) ? $_SESSION['fname_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td>
                <label for="lname">Last Name:</label>
                </td>
                <td>
                <input type="text" placeholder="Last Name" name="lname" id="lname">
                </td>
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['lname_error_msg']) ? $_SESSION['lname_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td>
                <label for="phone">Phone Number:</label> 
                </td>
                <td>
                <input type="phone" placeholder="+880**********" name="phone" id="phone" value="+880">
                </td>
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['phone_error_msg']) ? $_SESSION['phone_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td>
                <label for="email">Email ID:</label> 
                </td>
                <td>
                <input type="email" placeholder="example@" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td>
                <label for="gender">Gender:</label>
                </td>
                <td>
                <input type="radio" name="gender" id="gender" value="Male" required>Male
                </td>
                <td>
                <input type="radio" name="gender" id="gender"  value="Female" required>Female   
                </td>
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['gender_error_msg']) ? $_SESSION['gender_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td>
                <label for="dob">Date of Birth:</label>
                </td>
                <td>
                <input type="date" name="dob" id="dob">
                </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                <?php echo isset($_SESSION['dob_error_msg']) ? $_SESSION['dob_error_msg']:""?>
                </td>
            </tr>
            
            <tr>
                <td>
                <label for="pass">Password:</label>
                </td>
                <td>
                <input type="password" placeholder="Password" name="pass" id="pass">
                </td>
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>
        <input type="Submit" name="submit" value="Submit" style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">
        <a href="../view/login.php">
            <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Back</button>
        </a>
    </form> 
     
    
    
    </body>
</html>


