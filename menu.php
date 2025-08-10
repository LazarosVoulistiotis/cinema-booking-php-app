<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:login.php");
}
include ("view/top.php");
echo "Logged in  menu";
?>