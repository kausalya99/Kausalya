<?php
include_once('dbconnect.php');
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





<!--Table-->
<div class="col-sm-9" >
  
  <div class="well">
    <div class="page-content fade-in-up" >
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox" >
                          <div class="ibox-header" style="text-align:center; font-size: 40px;">
                            <p> Employee </p>
                            
                              
                            
                          </div>
                            <div class="ibox-body">
                              <div>
                                 
                              <h4><button onclick="window.location.href = 'internRegister_index.php'" type="submit" name="back" class="btn btn-primary">+ ADD</button></h4>
                              

                                
                            </div>
                                    <div>
                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="500%" style="text-align:center; font-size: 15px; " >
                                      <thead>
                                        <tr >
                                          <th><strong>UserID</strong></th>
                                          <th><strong>First name</strong></th>
                                          <th><strong>Last Name</strong></th>
                                          <th><strong>Username</strong></th>
                                          <th><strong>Password</strong></th>
                                          <th><strong>Contact Number</strong></th>
                                          <th><strong>Email</strong></th>
                                          <th><strong>Address</strong></th>
                                          <th><strong>Position</strong></th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        //$count=1;
                                        $sel_query="SELECT * FROM users WHERE role=3";
                                        $result = mysqli_query($con,$sel_query);

                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                          <tr style="text-align: center;" >
                                            <!--<td style="width:15%;"><?php echo $count; ?></td>-->
                                            <td> <?php echo $row["userID"] ?></td>
                                            <td> <?php echo $row["first_name"] ?></td>
                                            <td> <?php echo $row["last_name"] ?></td>
                                            <td> <?php echo $row["username"] ?></td>
                                            <td> <?php echo $row["password"] ?></td>
                                            <td> <?php echo $row["contact"] ?></td>
                                            <td> <?php echo $row["email"] ?></td>
                                            <td> <?php echo $row["address"] ?></td>
                                            <td> <?php echo $row["position"] ?></td>
                                          </tr>
                                       <!-- <?php $count++; } ?>-->
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

         <br>
         <br>
           <div class="page-content fade-in-up">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox">
                          <div class="ibox-header" style="text-align:center; font-size: 40px;">
                            <p> Intern</p>
                          </div>
                            <div class="ibox-body">
                              <h4><button onclick="window.location.href = 'internRegister_index.php'" type="submit" name="back" class="btn btn-primary">+ ADD</button></h4>
                              

                                    <div>
                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align:center; font-size: 15px;" >
                                      <thead>
                                        <tr >
                                          <th><strong>UserID</strong></th>
                                          <th><strong>First name</strong></th>
                                          <th><strong>Last Name</strong></th>
                                          <th><strong>Username</strong></th>
                                          <th><strong>Password</strong></th>
                                          <th><strong>Contact Number</strong></th>
                                          <th><strong>Email</strong></th>
                                          <th><strong>Address</strong></th>
                                          <th><strong>Position</strong></th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        //$count=1;
                                        $sel_query="SELECT * FROM users WHERE role=0";
                                        $result = mysqli_query($con,$sel_query);

                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                          <tr style="text-align: center;" >
                                            <!--<td style="width:15%;"><?php echo $count; ?></td>-->
                                            <td> <?php echo $row["userID"] ?></td>
                                            <td> <?php echo $row["first_name"] ?></td>
                                            <td> <?php echo $row["last_name"] ?></td>
                                            <td> <?php echo $row["username"] ?></td>
                                            <td> <?php echo $row["password"] ?></td>
                                            <td> <?php echo $row["contact"] ?></td>
                                            <td> <?php echo $row["email"] ?></td>
                                            <td> <?php echo $row["address"] ?></td>
                                            <td> <?php echo $row["position"] ?></td>
                                          </tr>
                                       <!-- <?php $count++; } ?>-->
                                      </tbody>
                                    </table>

<div class="row">
        <div class="col-sm-9">
          <div class="well">
            
