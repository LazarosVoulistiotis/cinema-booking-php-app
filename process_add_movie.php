<?php
    session_start();
    include ("model/Database.php");

    $db = new Database();
	$kalov = $db->connect();

    extract($_POST);//This line extracts the values from the $_POST array (containing form data) and assigns them to variables with the same names as the form input fields.
    $_SESSION['theatre'] = $_POST['theatre'];

    //Image Handling
    $target_dir = "images/";//Defines the directory where the uploaded image will be saved
    $target_file = $target_dir . basename($_FILES["image"]["name"]);//the full path to the uploaded image file. The basename extracts the original filename from the uploaded file.
    $flname="images/".basename($_FILES["image"]["name"]);//Stores the filename (including the path) in the $flname variable.

    //Insert Movie Data into Database
    mysqli_query($kalov,"insert into tbl_movie 
    values (NULL,'".$_SESSION['theatre']."','$name','$cast','$desc','$rdate','$flname','$video','0')");// '0'means active, represents the initial status of the movie
    
    //Move Uploaded File
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);//Moves the uploaded image file from its temporary location ($_FILES["image"]["tmp_name"]) to the specified destination ($target_file)
    
    $_SESSION['success']="Movie Added";
    header('location:adminmenu.php');
?>