
<?php
session_start();


require('schedule_process.php');


// session_start(); 
 // include_once('dbconnect.php');
 // $username = $_POST['username'];


//$query = "SELECT * FROM users WHERE role='0' and role='2' and role='3'"

?>
<!DOCTYPE html>

<html>
<head>
     <title> Register Page </title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" type="text/css"
	  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<br>
<br>
<div class="container" style="align-content: center" >
  <div class="login-box" style="max-width: 700px"  >
    <div class="row" style="border: 3px solid #000000" ">
	<div class="col-md-6 login-center" style="height: 300px" "padding-top: 20px">
	   <h2> Add Schedule  </h2>
	 <form action="schedule_process.php" method="post">
	     <div class="form-group">
		     <label> Time in </label>
			 <input type="time" name="timeIn" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Time out </label>
			 <input type="time" name="timeOut" class="form-control" required>
		 </div>
		 
		 <!-- <div class="form-group">
		     <label> Position </label>
			 <input type="text" name="position" class="form-control" required>
		 </div> -->
		     <button type="submit" name="add_schedule" class="btn btn-primary"> Add </button>
		     <button onclick="window.location.href = 'schedule_index.php'" type="submit" name="back" class="btn btn-primary">Back</button>
		     
     </form>
	</div>



	