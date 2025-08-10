<?php
session_start();
include ("model/Database.php");
if (!isset($_SESSION["uname"]))
{
	header("Location:index.php");
}
include ("view/adminmenu.php");
include ("view/addMovie.html");
?>
