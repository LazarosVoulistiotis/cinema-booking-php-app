<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:index.php");
}
include ("view/adminmenu.php");
include ("view/settings.php");
include "model/Database.php";
include ("model/msettings.php");
//check if user has pressed the submit button
if(isset($_REQUEST["cinema"]))
{
	
	$settings = new Settings($_REQUEST["cinema"],$_REQUEST["seats"],$_REQUEST["datelimit"]);
	
	$settings->update_settings();
}


?>