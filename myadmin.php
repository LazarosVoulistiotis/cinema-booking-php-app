<?php
session_start();

//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (isset($_SESSION["uname"]))
{
	header("Location:menu.php");
}
include ("model/Database.php");
include ("view/kalovolos.php");
include ("view/signup.php");

//check if user has pressed the submit button
if(isset($_REQUEST["uname"]))
{
	$uname=$_REQUEST["uname"];
	$pwd=password_hash($_REQUEST["pwd"],PASSWORD_DEFAULT);
	

	$servername = "localhost";
	$username = "kalovolos";
	$password = "1234";
	$dbname = "kalovolos";

// Create connection
	$kalov = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$kalov) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}


	$sql = "SELECT * FROM users where username = '$uname'";
	
	
	$result = mysqli_query($kalov, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		echo "User already exists!";
	}
	else
	{
		$sql = "INSERT INTO users (username, password, type) VALUES ('$uname', '$pwd' ,1)";	
		$result = mysqli_query($kalov, $sql);
		if ($result)
		{
			mysqli_close($kalov);
			$_SESSION["uname"] = $uname;   
			header("Location:menu.php");
		}
		else
		{
			echo "Serious problem!";
		}
	
	}
	mysqli_close($kalov);
}

?>