<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}

?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style>
                body {background-color:rgba(195,169,255,255);}
                h1   {color: rgba(252,252,255,255);}
                form {color: rgba(4,38,76,255);}               
        </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <br><br><br><br>

    <form align="center">
        <table  align="center">
            <tr>
                <td>
                <a href="../view/addBook.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">ADD BOOK</button>
                 </a>
                </td>
                <td>
                <a href="../view/renewBook.php">
                   <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">RENEW BOOK</button>
                </a>
                </td>              
            </tr>
            <tr>
            <td>
                <a href="../view/booksRequest.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">BOOKS REQUEST</button>
                </a>
                </td>
                <td>
                <a href="../view/booksIssue.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">BOOKS ISSUE</button>
                </a>
                </td>
            </tr>
        </table>

    </form>    
 
    

    <br><br><br><br><hr>
    <?php include 'footer.php'; ?>
    </body>
</html>