<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:index.php");
}
include ("view/adminmenu.php");
include ("view/shows.php");
include "model/Database.php";
include ("model/mshows.php");
//check if user has pressed the submit button
if(isset($_REQUEST["showid1"]))
{
	
	
	$shows = new Shows($_REQUEST["showid1"],$_REQUEST["start1"],$_REQUEST["showid2"],$_REQUEST["start2"]);
	
	$shows->update_shows();
}


?>