<?php
session_start(); 
    if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Add Book</title>
        <style>
            body {background-color:rgba(195,169,255,255);}
            h1   {color: rgba(252,252,255,255);}
            h2   {color: rgba(252,252,255,255);}
            form {color: rgba(4,38,76,255);}               
        </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <br><br>

    <form action="../controller/addBookAction.php"align="center"method="post" novalidate>
        <h2>ADD BOOKS</h2>
        <table align="center">
            <tr>
                <td>
                    <lable for="book">Book</label>
                </td>
                <td>
                    <input type="text" name="book" id="book" placeholder="Enter book name">
                </td>   
            </tr>
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['book_error_msg']) ? $_SESSION['book_error_msg']:""?>
            </td>
            </tr>
             
            <tr>
                <td>
                    <lable for="author">Author</label>
                </td>
                <td>
                    <input type="text" name="author" id="author" placeholder="Enter author name">
                </td>  
            </tr> 
            <tr>
                <td> </td>
            <td>
                <?php echo isset($_SESSION['author_error_msg']) ? $_SESSION['author_error_msg']:""?>
            </td>
            </tr>
            <tr>
                <td>
                    <input type="Submit" name="submit" value="Add Book" style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">
                </td>
                <td>
                <a href="home.php">
                    <button type="button"style="background-color:rgba(2,36,74,255);color:#ffffff;border-radius: 7.5px;">Back</button>
                </a>
                </td>
                
            </tr>      
        </table>
    </form>


    <br><br><hr>
    <?php include 'footer.php'; ?>
    </body>
</html>