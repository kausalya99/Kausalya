<?php
session_start();
require_once ('dbconnect.php');
include ('loginprocess.php');

$db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");
$id = $_SESSION['id'];
echo  $_SESSION['id'];
//$_SESSION['username']= $username;
// $_SESSION['position']= $position;
 //$_SESSION['id'] = $last_id;
 $sql_query = "SELECT * FROM user_log WHERE id = '$id'";
 $results = mysqli_query($db, $sql_query);
 $row = mysqli_fetch_array($results,MYSQLI_ASSOC );
 //$id = $row['id'];
 //echo $id;

 
//$username = $_POST ['username'];
   
 // $login_date = date("Y-m-d");     
  date_default_timezone_set('Asia/Kuala_Lumpur');
  $logout_time = date("h:iA") ;

  // $check_query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
  $query= "UPDATE user_log SET logout_time = '$logout_time' WHERE id ='$id' ";
 
  $results = mysqli_query($db, $query);
  if($results == 1){
    echo "time out";
    echo $logout_time;
    echo  $_SESSION['id'];
    //  if ($db->query($query) === TRUE) {
    // $last_id = $conn->insert_id;
    //$_SESSION['id'] = $last_id;
    
  }

  else{
    echo "no";
    header("location:login.php");
  }


  ////////below

//include ('login.php');
// this is logout page when user click button logout in system page

// $db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");
// $error = array();
 
//   $_SESSION['id'] = $last_id;
// // // $_SESSION['position']= $position;
//   $sql_query = "SELECT * FROM userlog WHERE id = '$id'";
//  $results = mysqli_query($db, $sql_query);
//  $row = mysqli_fetch_array($results,MYSQLI_ASSOC );
//  $id = $row['id'];





     
//   date_default_timezone_set('Asia/Kuala_Lumpur');
//   $logout_time = date("h:iA") ;

// //   // $check_query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
//   //$query= "INSERT INTO user_log ( user_name, logout_time) VALUES ('$name', '$logout_time')";
//   $query= "UPDATE user_log SET logout_time = '$logout_time' WHERE id = '$id' ";
//   $results = mysqli_query($db, $query);
//   $_SESSION = NULL;
//   $_SESSION = [];
//   if($results == 1){
//     echo "time out";
//   }
//   else{
//     echo "no";
//     //header("location:admin_index.php");
//   }

////////////top


           //  $sql_3 = "UPDATE user_log SET logout_time = current_timestamp where user_name = '.$_SESSION['username'].'";
           // $results3 = mysqli_query($con, $sql_3);


           // $_SESSION['success'] = "You are now logged out";
           // header('location: login.php');




// date_default_timezone_set('Asia/Kuala_Lumpur');
//   $logout_time = date("h:iA") ;
//    $username = $_SESSION["username"];

// $sql = "UPDATE user_log SET logout_time = $logout_time WHERE user_name = '$username'";
// //$sql = "UPDATE user_log SET logout_time = '$logout_time' WHERE user_name = '".$_SESSION["username"]."'"; 

// mysqli_query($db,$sql);
	
// session_destroy();
// header('Refresh: 0; URL = login.php');




// $time = date("H:i:s");
//  $_SESSION['username']= $username;
//  $name = $row["username"];

// $logout_query = "UPDATE user_log SET logout_time = '$time' WHERE user_name = '$name' ";

// //$query= "INSERT INTO user_log (login_date, login_time, user_name, logout_time) VALUES ('$login_date', '$login_time', '$name', '')";
//   $results = mysqli_query($con, $logout_query);
//   if($results == 1){
//     echo "time out";
//     $_SESSION = NULL;
//     $_SESSION = [];
//     session_unset();
//     session_destroy();
//     header("location:login.php");
//   }
//   else{
//     echo "no";
//   }

// $logout_query = mysql_query("UPDATE user_log SET logout_time = '$time' WHERE username = '$_SESSION['username']' ");
//mysqli_query($conn, "UPDATE track_log_user SET logout_date = '$date' AND logout_time = '$time' WHERE username = '$_SESSION[the_username]'");


?>
