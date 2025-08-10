<?php
class Shows{
	public $showid1;
	public $start1;
	public $showid2;
	public $start2;		
	function __construct($showid1,$start1,$showid2,$start2,)
	{
		$this->showid1 = $showid1;
		$this->start1 = $start1;
		$this->showid2 = $showid2;
		$this->start2 = $start2;		
	}
/*	function read_datelimit()
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
	*/	
	
	function update_shows()
	{
		$db = new Database();
		$kalov = $db->connect();
		
		$sql = "SELECT * FROM shows ";
	
		$result = mysqli_query($kalov, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			$sql="UPDATE shows SET showid1=$this->showid1, start1='$this->start1', showid2=$this->showid2, start2='$this->start2'";
			//echo $sql;
			//die();
		}
		else
		{
			$sql = "INSERT INTO shows (showid1,start1,showid2,start2) VALUES ($this->showid1, '$this->start1', $this->showid2, '$this->start2')";	
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