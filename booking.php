<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:menu.php");
}

include "model/Database.php";
include ("model/msettings.php");

$settings = new Settings("a","01-01-2000",100);//arguments are default values for the cinema name, date limit, and number of seats
$settings->read_datelimit();//retrieve the date limit for booking tickets from the database and store it in the $_SESSION['datelimit'] variable
include ("view/top.php");
//include ("view/kalovolos.php");
include ("view/vbooking.php");



if(isset($_REQUEST["bookingdate"]))
{
	$_SESSION['bookingdate']= $_REQUEST["bookingdate"];
	$_SESSION['bookingshow']= $_REQUEST["bookingshow"];
	header ("Location:booking2.php");	
}

?>