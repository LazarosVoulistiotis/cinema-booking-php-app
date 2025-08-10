 <?php
class Settings{
	public $cinemaname;
	public $seats;
	public $datelimit;	
	function __construct($cinemaname, $seats,$datelimit)
	{
		$this->cinemaname = $cinemaname;
		$this->seats = $seats;
		$this->datelimit = date("Y-m-d", strtotime($datelimit));
	}
	//This method is used to retrieve the date limit for booking tickets from the database.
	function read_datelimit()
	{
		$db = new Database();
		$kalov = $db->connect();
		$sql = "SELECT * FROM settings ";
	
		$result = mysqli_query($kalov, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			$_SESSION['datelimit']= ($row['datelimit']);
		}
		mysqli_close($kalov);
		
	}
	//This method retrieves the total number of seats in the cinema from the database.
	function read_seatlimit()
	{
		$db = new Database();
		$kalov = $db->connect();
		$sql = "SELECT * FROM settings ";
	
		$result = mysqli_query($kalov, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			$_SESSION['seatlimit']= ($row['seats']);
		}
		mysqli_close($kalov);
		
	}		
	//This method is used to update or insert cinema settings into the database.
	function update_settings()
	{
		$db = new Database();
		$kalov = $db->connect();
		
		$sql = "SELECT * FROM settings ";
	
		$result = mysqli_query($kalov, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			$sql="UPDATE settings SET cinemaname='$this->cinemaname', seats=$this->seats, datelimit='$this->datelimit'";
		}
		else
		{
			$sql = "INSERT INTO settings (cinemaname, seats, datelimit) VALUES ('$this->cinemaname', $this->seats, '$this->datelimit')";	
		}
		$result = mysqli_query($kalov, $sql);
		if ($result)
		{
			mysqli_close($kalov);
		}
		else
		{
			echo "Serious problem!";
		}
	
	}
}


?>