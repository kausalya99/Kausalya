
<?php


include ('loginprocess.php');
include_once('dbconnect.php');

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
	<div class="col-md-6 login-center" style="height: 800px" "padding-top: 20px">
	   <h2> Register here  </h2>
	 <form action="loginprocess.php" method="post">
	     <div class="form-group">
		     <label> First Name </label>
			 <input type="text" name="first_name" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Last Name </label>
			 <input type="text" name="last_name" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Username </label>
			 <input type="text" name="username" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Password </label>
			 <input type="password" name="password" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Contact Number</label>
			 <input type="text" name="contact" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Email </label>
			 <input type="text" name="email" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Address </label>
			 <input type="text" name="address" class="form-control" required>
		 </div>
		 <!-- <div class="form-group">
		     <label> Position </label>
			 <input type="text" name="position" class="form-control" required>
		 </div> -->
		     <button type="submit" name="register_intern" class="btn btn-primary"> Register </button>
		     <button onclick="window.location.href = 'employee_details.php'" type="submit" name="back" class="btn btn-primary">Back</button>
		     
     </form>
	</div>



	