<?php
class Database{
	
	public $servername = "localhost";
	public $username = "kalovolos";
	public $password = "1234";
	public $dbname = "kalovolos";

	function connect()
	{

// Create connection
		$kalov = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
// Check connection
		if (!$kalov) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		return $kalov;
	}
}
?>