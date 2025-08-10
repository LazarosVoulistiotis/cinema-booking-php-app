<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:menu.php");
}
include "model/Database.php";
include ("model/msettings.php");
include ("model/Mbooking.php");
$settings = new Settings("a","01-01-2000",100);//Creates an instance of the Settings class. The arguments passed to the constructor ("a", "01-01-2000", 100)for cinema name, number of seats and datelimit, which will be overridden later
$settings->read_seatlimit();//This method retrieves the actual number of seats from the database and stores it in the $_SESSION['seatlimit'] variable

$booking = new Booking($_SESSION["uname"],
	$_SESSION["bookingdate"],$_SESSION["bookingshow"],0,0);
	$booking->check_seats($_SESSION['seatlimit']);
	
include ("view/top.php");
include ("view/vbooking2.php");



if(isset($_REQUEST["bookingseat"]))//This conditional block checks if the bookingseat parameter is present in the $_REQUEST array. This indicates that the user has selected a seat.
{
		$booking->bookingseat= $_REQUEST["bookingseat"];
		$booking->save_booking();//This method handle the process of saving the booking information to the database
}

?>