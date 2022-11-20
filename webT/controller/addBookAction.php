<?php
	session_start();

    // if(isset($_POST['submit'])){
    //     $book =$_POST['book'];
    //     $author =$_POST['author'];

    //     $data=file_get_contents('../model/addBook.json');
    //     $data_array=json_decode($data,true);

    //     $data_new=array(
    //         'book'=>$book,
    //         'author'=>$author);
    //     $data_array[]=$data_new;
    //     $new_data=json_encode($data_array);
    //     if(file_put_contents('../model/addBook.json',$new_data))
    //     {
    //         echo"Book Add successfully";
    //         header("Location: ../view/addBook.php");
    //     }
    // }
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$book = sanitize($_POST['book']);
		$author = sanitize($_POST['author']);		
		$isValid = true;
		if(empty($book)){
			$_SESSION['book_error_msg']="Book name can not be empty";
			$isValid=false;
		}

		if(empty($author)){
			$_SESSION['author_error_msg']="Author name can not be empty";
			$isValid=false;
		}

		 

		if($isValid === true){
			$_SESSION['book_error_msg']="";
			$_SESSION['author_error_msg']="";
			 
			//
			include '../model/addBookDatabase.php';
		}
		else{
			header("Location: ../view/addBook.php");
		}
 
	}
	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>