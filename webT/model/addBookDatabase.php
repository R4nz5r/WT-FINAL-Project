<?php
     $conn=mysqli_connect("localhost","root","","lms");
     if(!$conn){
         die("Sorry we failed to connect".mysqli_connect_error());
     }
     else{
        $stmt = $conn->prepare("INSERT INTO book (book,author) VALUES (?, ?)");
        $stmt->bind_param("ss", $book, $author);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../view/addBook.php");
     }
?>