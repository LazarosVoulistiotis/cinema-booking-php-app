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
  <h2>Settings</h2>
   <form  class="was-validated" method="POST">
    <div class="form-group">
      <label for="cinema">Cinema name:</label>
      <input type="text" class="form-control" id="cinema" placeholder="Enter cinema name" name="cinema" required>
       <label for="seats">Seats:</label>
      <input type="number" class="form-control" id="seats" placeholder="Enter seats" name="seats" required>
	  <label for="datelimit">Booking date limit:</label>
      <input type="date" class="form-control" id="datelimit" placeholder="Enter datelimit " name="datelimit"  required>

	  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

