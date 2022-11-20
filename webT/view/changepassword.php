<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Change password</title>
        <style>
                body {background-color:rgba(195,169,255,255);}
                h1   {color: rgba(252,252,255,255);}
                form {color: rgba(4,38,76,255);}               
        </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <br>
        <h1 style="text-align:center;">Change Password</h1>
        <form style="text-align:center;" method="post" action="../controller/changepasswordAction.php" novalidate>
        <table align="center">
            <tr>
                <td>
                <label for="oldpass">Old Password:</label>
                </td>
                <td>
                <input type="password" 
                       name="pass"
                       id="oldpass" 
                       placeholder="example@***">
                </td>
            </tr>
            <tr>
                <td>
                <label for="c_pass">Change password:</label>
                </td>
                <td>
                <input type="password" 
                       name="pass" 
                       id="c_pass" 
                       placeholder="****">  
                </td>
            </tr>
            <tr>
                <td>
                <label for="c_npass">Confirm change password:</label>
                </td>
                <td>
                <input type="password"
                       name="pass" 
                       id="c_npass" 
                       placeholder="****">   
                </td>
            </tr>
            <tr>
                 <td></td>
                <td>
                <input type="Submit" name="submit" value="Confirm Change" style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">
                
                <a href="home.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Back</button>
                </a>
                </td>
            </tr>
        </table>            
        </form>        
        <br><br><br><br><hr>
    <?php include 'footer.php'; ?>
    </body>
</html>