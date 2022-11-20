<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <style>
                body {background-color:rgba(195,169,255,255);}
                h1   {color: rgba(252,252,255,255);}
                form {color: rgba(4,38,76,255);}               
        </style>
    </head>

    <body style="text-align:center;">
        <h1  style="text-align:center;">Login Page</h1>

    <form style="text-align:center;" action="../controller/loginAction.php" method="post" novalidate>  
    
        <table align="center">
            <tr>
                <td>
                <label for="email">Email:</label>   
                </td>
                <td>
                <input type="email" name="email" id="email" placeholder="Email">
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
                <label for="pass">Password:</label>   
                </td>
                <td>
                <input type="password" placeholder="Password" name="pass" id="pass">
                </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                <?php echo isset($_SESSION['pass_error_msg']) ? $_SESSION['pass_error_msg']:""?>
                </td>
            </tr>
        </table>
        <input type="Submit" name="submit" value="Signin" style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">
          <a href="../view/registation.php">
            <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Signup</button>
        </a>  
    </form>
    <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg']:""?>
                
            
    </body>
</html>