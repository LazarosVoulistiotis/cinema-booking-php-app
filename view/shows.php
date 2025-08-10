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
  <h2>Shows</h2>
   <form  class="was-validated" method="POST">
    <div class="form-group">
      <label for="showid1">ID SHOW 1:</label>
      <input type="number" class="form-control" id="showid1" placeholder="Enter id show 1" name="showid1" required>
      <label for="start1">Start 1:</label>
      <input type="time" class="form-control" id="start1" placeholder="Enter start 1" name="start1" required>
      <label for="showid2">ID SHOW 2:</label>
      <input type="number" class="form-control" id="showid2" placeholder="Enter id show 2" name="showid2" required>
      <label for="start2">Start 2:</label>
      <input type="time" class="form-control" id="start2" placeholder="Enter start 2" name="start2" required>
    
	  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

