<?php
session_start();
include ("model/Database.php");
 $db = new Database();//creates an instance of the Database class
 $kalov = $db->connect();
$mid=$_GET['mid'];//Retrieves the mid (movie ID) parameter from the URL. This is passed from the delete button
mysqli_query($kalov,"DELETE FROM tbl_movie WHERE movie_id='$mid'");
 $_SESSION['success']="Movie Deleted";
header("location:viewmovie.php");
?>