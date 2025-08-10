<?php
session_start();
//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:index.php");
}
include ("view/adminmenu.php");
echo "Logged in admin menu";
?>