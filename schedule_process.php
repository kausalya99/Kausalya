<?php

 //include('timezone.php');

include_once('dbconnect.php');


if(isset($_POST['add_schedule'])) {
   $time_in = $_POST['timeIn'];
   $time_out = $_POST ['timeOut'];
   //date_default_timezone_set('Asia/Kuala_Lumpur');
  
   //$time_in = date("h:iA", strtotime($time_in));
   //$time_out = date("h:iA", strtotime($time_out)); 


   //check db for existing customer
   $user_check_query = "SELECT * FROM schedule WHERE time_in = '$time_in' AND time_out = '$time_out'";

   $db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_num_rows($result);

  if ($user == 1){
    echo "There is already a schedule on this time.";

  }
  else{
    $query = "INSERT INTO schedule (time_in, time_out) VALUES ('$time_in' , '$time_out')";
    $row= mysqli_query($db,$query);

    if(mysqli_affected_rows($db) > 0){
    header("location:schedule_index.php");
    $msg = "Schedule added successfully";
  }
  else{
    echo "Unsuccessful";
  }
  }
}


?>