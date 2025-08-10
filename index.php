<?php
session_start();
include ("model/Database.php");
if (isset($_SESSION["uname"])) {
    // User is logged in
    include ("view/top.php"); 
} else {
    // User is not logged in
    include ("view/kalovolos.php"); 
}
include ("MDB5/carousel.html");
?>