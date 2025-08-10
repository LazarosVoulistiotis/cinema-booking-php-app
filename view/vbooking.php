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

<div class="container">
  <h1>Booking </h1>
  <h4>Select 1 for 21:00 or 2 for 23:00 </h4>
  <form  class="was-validated" method="POST">
    <div class="form-group">
      <label for="bookingdate">Date of booking:</label>
      <input type="date" class="form-control" id="bookingdate" placeholder="Enter booking date" name="bookingdate" 
	  
	  min="<?php echo date("Y-m-d")?>" max= "<?php echo  date("Y-m-d",strtotime($_SESSION['datelimit']))?>" required>
		<label for="bookingshow">Show:</label>
      <input type="number" class="form-control" id="bookingshow" placeholder="Enter booking show" name="bookingshow" 
	  
	  min="1" max= "2" required>

      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

