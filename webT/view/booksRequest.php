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

    <form action=""align="center">
    <h2>BOOKS REQUEST</h2>
        <table align="center">
            <tr>
                <?php
                $json_data=file_get_contents("../model/booksRequest.json");
                $products=json_decode($json_data,true);
                if(count($products)!=0){
                    foreach($products as $product ){
                    ?><tr><td> Book Name:<?php echo $product['book'] ?></td> </tr>
                       <tr><td> Author Name:<?php echo $product['author'] ?></td></tr>
                       <tr><td> Email:<?php echo $product['email'] ?></td></tr>  
                          
                          

                    <?php
                }
                }
                ?>
                
            </tr>
             
                   
        </table>
    </form>


    <br><br><hr>
    <?php include 'footer.php'; ?>
    </body>
</html>