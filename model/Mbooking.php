<?php
//Declare class
class Booking{
	
	public $username;
	public $bookingdate;
	public $bookingshow;
	public $bookingseat;
	public $confirmed;
	public $seatsa = array();
		
	// Method constructor. It's automatically called when an object of the "Booking" class is created and it initializes the object's properties with the values passed as arguments.
	function __construct($username, $bookingdate,$bookingshow,$bookingseat,$confirmed)
	{
		$this->username = $username;
		$this->bookingdate = $bookingdate;
		$this->bookingshow = $bookingshow;
		$this->bookingseat = $bookingseat;
		$this->confirmed = $confirmed;
	}
	//Save a booking to the database
	function save_booking()
	{
		$db = new Database();
		$kalov = $db->connect();

		$sql = "SELECT * FROM bookings where 
			bookingdate	= '$this->bookingdate' and
			bookingshow = $this->bookingshow and
			bookingseat = $this->bookingseat";

		$result = mysqli_query($kalov, $sql);
	//checks if the specified seat is already booked for the given date and show
		if (mysqli_num_rows($result) > 0)
		{
			echo "Seat already booked";
		}
		else
		{
		//TO DO: need to make sure the seat is still free before INSERT!!!!
		//inserts a new record into the "bookings" table with the booking details
			$sql = "INSERT INTO bookings (username, bookingdate, bookingshow, bookingseat, confirmed)
			VALUES ('$this->username', '$this->bookingdate',$this->bookingshow,
					$this->bookingseat,$this->confirmed)";	

			$result = mysqli_query($kalov, $sql);
		//insertion is successful
			if ($result)
			{
				$_SESSION["uname"] = $this->username;
				
				// Ensure no output is sent before header
				if (!headers_sent()) {
					header("Location:menu.php");
					exit(); // Stop further script execution after redirection
				} else {
					echo "Your booking is successful.<br>";
					echo "Please exit";
				}
			}
			else //insertion fails
			{
				echo "Serious problem!";
			}
	
		}
		mysqli_close($kalov);
	}
	//check the availability of seats for a given show and date
	function check_seats($howmany)
	{
		//initialize an array $seatsa with the available seat numbers
		for($i=0; $i <$howmany; $i++)
		{
			array_push($this->seatsa,($i+1));
		}		

		$db = new Database();
		$kalov = $db->connect();
		//retrieve all bookings for the specified date and show from the database
		$sql = "SELECT * FROM bookings where 
			bookingdate	= '$this->bookingdate' and
			bookingshow = $this->bookingshow ";


		$result = mysqli_query($kalov, $sql);
		//iterates through the retrieved bookings and removes the booked seat numbers from the $seatsa array
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				 unset( $this->seatsa[($row["bookingseat"]-1)]);
				 
			}
			//var_dump($seatsa);
			//die();
		}
		
		mysqli_close($kalov);
	}
}



?>