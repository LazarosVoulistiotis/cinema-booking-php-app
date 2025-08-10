<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (isset($_SESSION["uname"]))
{
	header("Location:menu.php");
}
include ("model/Database.php");
include ("model/User.php");
include ("view/kalovolos.php");
include ("view/login.php");



if(isset($_REQUEST["uname"]))
{
	$user = new User($_REQUEST["uname"],$_REQUEST["pwd"]);
	
	$user->check_login();
	
}

?>