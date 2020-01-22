<?php
session_start();

require('loginprocess.php');


// session_start(); 
 // include_once('dbconnect.php');
 // $username = $_POST['username'];


//$query = "SELECT * FROM users WHERE role='0' and role='2' and role='3'"

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/ui.min.css?ver=3.6" type="text/css" media="all" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <h1> ADMIN </h1>
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin_index.php">Dashboard</a></li>
        <li><a href="employee_details.php">Employee Details</a></li>
        <li class="active"><a href="attendance_index.php">Attendance</a></li>
        <li><a href="schedule_index.php">Schedule</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h1> ADMIN </h1>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="admin_index.php">Dashboard</a></li>
        <li><a href="employee_details.php">Employee Details</a></li>
        <li class="active"><a href="attendance_index.php">Attendance</a></li>
        <li><a href="schedule_index.php">Schedule</a></li>
      </ul><br>
    </div>
    <br>
    
    

    <div class="col-sm-9">
      <div class="well">
        <h4><span style="color:black">Welcome <?php echo $_SESSION['id'];?></span>  
          <!-- <button type="submit" name="logout" class="btn btn-primary pull-right"> Logout </button> -->
         <button onclick="window.location.href = 'logout.php'" type="submit" name="logout" class="btn btn-primary pull-right">Logout</button> </h4> 

        <h4><b><?php echo $_SESSION["username"] ?> </b>
        
        </h4>


      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Total Employees</h4>

            <p> 
             <?php  
              require 'dbconnect.php';
              $db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

              $sql = "SELECT userID FROM users WHERE role= 0 OR role= 3 ";
              // $sql="SELECT count(userID) AS total FROM users WHERE position = 'Employee' " ;
              $sql_run = mysqli_query($db, $sql);
              $row = mysqli_num_rows($sql_run);
              
              echo '<h1>' .$row. '</h1>';
              ?> </p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Managers </h4>

            <?php  
              require 'dbconnect.php';
              $db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

              $sql = "SELECT userID FROM users WHERE role = 2 ";
              // $sql="SELECT count(userID) AS total FROM users WHERE position = 'Employee' " ;
              $sql_run = mysqli_query($db, $sql);
              $row = mysqli_num_rows($sql_run);
              
              echo '<h1>' .$row. '</h1>';
              ?>
             
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Time</h4>
          <h3>  <?php 
            date_default_timezone_set('Asia/Kuala_Lumpur');
            echo date ('l, jS F h:iA') ; ?></h3>
            
          </div>
        </div>
       <!-- <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p><?php echo $_SESSION['username'] ?></p> 
          </div>
        </div> -->  
      </div>



                                
</div>
</div>
</div>
                                  	
</body>
</html>

