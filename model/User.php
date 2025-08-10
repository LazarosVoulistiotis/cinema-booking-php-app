<?php
//This line declares a class named "User". Classes are blueprints for creating objects that encapsulate data (properties) and behavior (methods)
class User{
	
	public $username;
	public $password;
	public $type;
//This is the constructor of the "User" class. It is automatically called when a new "User" object is created.
	function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}
//This method creates an instance of a Database class. Calls the connect() method of the Database object to establish a database connection and stores the connection resource in the $kalov variable.
	function check_login()
	{
		
		$db = new Database();
		$kalov = $db->connect();
//SQL query to retrieve user information from the "users" table based on the current object's $username
		$sql = "SELECT * FROM users where username = '$this->username' ";
		$result = mysqli_query($kalov, $sql);

		if (mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			$hash= $row['password'];
			if (password_verify($this->password, $hash)) //Compares the provided password ($this->password) with the stored hash using password_verify().
			{
				if($row['type'] ==0)
				{
					mysqli_close($kalov);
//logged in	user	
					$_SESSION["uname"] = $this->username;   
					header("Location:menu.php");
				}
				else
				{
					mysqli_close($kalov);
//logged in	administrator	
					$_SESSION["uname"] = $this->username;   
					header("Location:adminmenu.php");				
				}
			}
		}
//f the username doesn't exist or the password doesn't match
		mysqli_close($kalov);
		echo "NOT LOGGED IN";
	}
	
	
	function signup()
	{
		$this->password=password_hash($this->password,PASSWORD_DEFAULT); //Hashes the provided password using password_hash() for security
		
		$db = new Database();
		$kalov = $db->connect();

		$sql = "SELECT * FROM users where username = '$this->username'";
		$result = mysqli_query($kalov, $sql);

		if (mysqli_num_rows($result) > 0)
		{
			echo "User already exists!";
		}
		else
		{
			$sql = "INSERT INTO users (username, password) VALUES ('$this->username', '$this->password' )"; //SQL query to insert a new user into the "users" table	
			$result = mysqli_query($kalov, $sql);

			if ($result) //If the insertion was successful
			{
				mysqli_close($kalov);
				$_SESSION["uname"] = $this->username;   
				header("Location:menu.php");
			}
			else
			{
				echo "Serious problem!";
			}
	
		}
		mysqli_close($kalov);
	}
	
}



?>