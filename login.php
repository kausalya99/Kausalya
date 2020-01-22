<!-- <?php
session_start();

	

?> -->
<!DOCTYPE html>

<html>
<head>
     <title> Login Page </title>
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
	   <h2> Login here </h2>
	 <form action="loginprocess.php" method="post">
	     <div class="form-group">
		     <label> Username </label>
			 <input type="text" name="username" class="form-control" required>
		 </div>
		 <div class="form-group">
		     <label> Password </label>
			 <input type="password" name="password" class="form-control" required>
		 </div>

		<!--  <div class="form-check">
             <input type="checkbox" class="form-check-input" id="attendance" name="attendance" checked>
             <label class="form-check-label" for="attendance">Time in</label>
         </div> -->

		     <button type="submit" name="login_user" class="btn btn-primary"> Login </button>
		     <!-- <button type="submit" name="attendance" class="btn btn-primary"> Attendance </button> -->
     </form>
	</div>



<!-- <html>
<head>
	<title>Login</title>
	 <link rel="stylesheet" type="text/css"
	  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
		<h2 class="header">Login</h2>
			<form id="login_user" action="/loginprocess.php" method="post">
			 <!--<?php include('errors.php'); ?> -->

								<!--Username textbox-->
								<!-- <div>
									<label for="username">Username: </label>
									<input type="text" name="username" required >
								</div>
								<br/>
								<!--Password textbox-->
								<label for="password">Password: </label>
								<input type="password" name="password" required >

								
							

								<p>
									 <input type="submit"  name = "login_user" value="login" ;
/>
								</p>
							</form>
						</div> -->
					</body> -->