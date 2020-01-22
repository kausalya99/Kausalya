<?php

session_start();


  include_once('dbconnect.php');
  include('timezone.php');
  


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
        <li ><a href="schedule_index.php">Schedule</a></li>
        
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
        <li><a href="schedule_index.php">Schedule</a></li> -->
        
  


      </ul><br>
    </div>
    <br>
    
    

    <div class="col-sm-9">
      <div class="well">

        <div class="page-content fade-in-up" >
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox" >
                          <div class="ibox-header" style="text-align:center; font-size: 40px;">
                            <p> Attendance</p>
                            
                              
                            
                          </div>
                            <div class="ibox-body">
                              <div>
                                 
                             <!--  <h4><button onclick="window.location.href = 'internRegister_index.php'" type="submit" name="back" class="btn btn-primary">+ ADD</button></h4> -->
                              

                                
                            </div>
                                    <div>
                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="500%" style="text-align:center; font-size: 15px; " >
                                      <thead style="text-align: center;">
                                        <tr >
                                          <th><strong>Username</strong></th>
                                          <!-- <th><strong>Position</strong></th> -->
                                          <th><strong>Date</strong></th>
                                          <th><strong>Time in</strong></th>
                                          <th><strong>Time Out</strong></th>
                                          
                                          <!-- <th><strong>Password</strong></th>
                                          <th><strong>Contact Number</strong></th>
                                          <th><strong>Email</strong></th>
                                          <th><strong>Address</strong></th>
                                          <th><strong>Position</strong></th> -->
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        //$count=1;
                                        $sel_query="SELECT * FROM user_log ";
                                        $result = mysqli_query($con,$sel_query);

                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                          <tr style="text-align: center;" >
                                            <!--<td style="width:15%;"><?php echo $count; ?></td>-->
                                            <td> <?php echo $row["user_name"] ?></td>
                                            <!-- <td> <?php echo $row["position"] ?></td>  -->
                                            <td> <?php echo date('D, d M Y', strtotime($row['login_date']))?></td>
                                            <td> <?php echo date('h:i A', strtotime($row['login_time']))?></td>
                                            <td> <?php echo date('h:i A', strtotime($row['logout_time']))?></td>
                                            
                                          </tr>
                                       <!-- <?php $count++; } ?>-->
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        <h4>Welcome </h4>

        <h4><b><?php echo $_SESSION['username']; ?> </b></h4>
      </div>


      <!-- <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div> -->
        <!-- <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div> -->
      </div>



                                

                                  	
</body>
</html>