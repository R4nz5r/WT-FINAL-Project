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
            table{  border:1px white;
                    border-collapse: collapse;
                    border-radius: 10px; 
                     }              
        </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <br><br>
    <h2>RENEW BOOKS</h2>
    <form action="../controller/renewBookAction.php"align="center">
    
    <table align="center">
        <tr>
            <th>Book</th>
            <th>Author</th>
            <th colspan="2">Operation</th>
        </tr>
        <tbody>
            <?php
                 $conn=mysqli_connect("localhost","root","","lms");
                 if(!$conn){
                     die("Sorry we failed to connect".mysqli_connect_error());
                 }
                 else{

                    $sql ="select * from book"; 
                    $query=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($query);
                     
                    while ($res=mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $res['book'];?></td>
                            <td><?php echo $res['author'];?></td>
                            <td><button>Update</button></td>
                            <td><button>Remove</button></td>
                        </tr>
                         <?php
                        }
                     
                  }     
            ?>  
        </tbody>
    </table>   
    </form>


    <br><br><hr>
    <?php include 'footer.php'; ?>
    </body>
</html>