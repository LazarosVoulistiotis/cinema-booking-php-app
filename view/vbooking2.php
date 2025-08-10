
<?php
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalovolos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Bootstrap container class. This class provides a responsive container for the content within it -->
<div class="container">
  <h2>Booking </h2>
   <form  class="was-validated" method="POST">
    <div class="form-group">
      <label for="bookingseat">Seat:</label>
	  
	 <select name="bookingseat" id="bookingseat"> 

	  <?php   
	  foreach($booking->seatsa as $select) //This array contains a list of available seats 
	  {
		  echo "<option value='$select'>$select</option>";
	  }
	  ?>
    
	</select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>

<?php
ob_end_flush(); // Flush output buffer
?>