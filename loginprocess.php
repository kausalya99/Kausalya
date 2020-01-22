<?php


include_once ('dbconnect.php');
$username = "";
$password = "";
$firstname = "";
$lastname = "";
$email = "";
$contact = "";
$position = "";
$login_date = "";
$login_time = "";
$name = "";


if(isset($_POST['login_user'])) {

$username = $_POST['username'];
$password = $_POST ['password'];
 
$errors = array();
$last_id = session_id();
     

//database connection
$db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

      $login_query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$login_query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);


      // If result matched $username and $password, table row must be 1 row
      if($count == 1) {
         
        // $fetch = mysqli_fetch_assoc($login_query);
        //$_SESSION['username'] = $fetch['username'];
         $_SESSION['username'] = $username ;
         $_SESSION['success'] = "You are now logged in"; //does not show
          

         //Intern Login
         if($row['role'] == 0) {
                header("location: index.php");
             }

         //owner Login
         if($row['role'] == 1) {
                header("location: admin_index.php");
                
             }

        if($row['role'] == 3) {
                header("location: employee_index.php");
             }


   }
    else {
      echo"Invalid username and password";
   }
 }
////////try version


 /////////////Attendance using login_user

 include_once('dbconnect.php');
 include('timezone.php');


$db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

 
 $_SESSION['username']= $username;
// $_SESSION['position']= $position;
 $sql_query = "SELECT * FROM users WHERE username = '$username'";
 $results = mysqli_query($db, $sql_query);
 $row = mysqli_fetch_array($results,MYSQLI_ASSOC );
 $name = $row["username"];
 //$last_id = session_id();
 


if(isset($_POST['login_user'])){
 // $last_id = $_SESSION['id'];
$username = $_POST ['username'];
$db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");
   
  $login_date = date("Y-m-d");     
  date_default_timezone_set('Asia/Kuala_Lumpur');
  $login_time = date("h:iA") ;

  // $check_query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

  $query= "INSERT INTO user_log (id,login_date, login_time, user_name, logout_time) VALUES (NULL,'$login_date', '$login_time', '$name' , '')";
  $id_query = "SELECT * FROM user_log ORDER BY id desc LIMIT 1" ;


 
  $results = mysqli_query($db, $query);
  if($results == 1){
    echo "time in";

    $result_id = mysqli_query($db, $id_query);

    if($result_id == 1){
      $row2 = mysqli_fetch_assoc($result_id);
      $id = $row2['id'];
      $_SESSION['id'] = $id;
      echo $id;
    }
    

  //    if ($db->query($query) === TRUE) {
  //    $last_id = $conn->insert_id;
  //   $_SESSION['id'] = $last_id;
    
  // }
}
  else{
    echo "no";
    header("location:login.php");
  }
}


////////logout time out
// if( isset($_POST['logout'])){

// date_default_timezone_set('Asia/Kuala_Lumpur');
//   $logout_time = date("h:iA") ;
//   $_SESSION['username']= $username;

// $sql = "UPDATE user_log SET logout_time = $logout_time WHERE user_name = '".$_SESSION["username"]."'";
// //$sql = "UPDATE user_log SET logout_time = '$logout_time' WHERE user_name = '".$_SESSION["username"]."'"; 

// mysqli_query($db,$sql);

  
// session_destroy();
// header('Refresh: 0; URL = login.php');
// }

// this is logout page when user click button logout in system page




// if(isset($_POST['logout'])){
//   date_default_timezone_set('Asia/Kuala_Lumpur');
//   $logout_time = date("h:iA") ;

//   $query= "INSERT INTO user_log (login_date, login_time, user_name, logout_time) VALUES ('$login_date', '$login_time', '$name','$logout_time')";
//   $results = mysqli_query($db, $query);
//   if($results == 1){
//     echo "time out";
//   }
//   else{
//     echo "no";
//   }



  

//register employee


if(isset($_POST['register_emp'])) {
   $firstname = $_POST['first_name'];
   $lastname = $_POST ['last_name'];
   $username = $_POST ['username'];
   $password = $_POST ['password'];
   $contact = $_POST ['contact'];
   $email = $_POST ['email'];
   $address = $_POST ['address'];
   //$position = $_POST ['position'];


   //check db for existing customer
   $user_check_query = "SELECT * FROM users WHERE username = '$username' ";

   $db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_num_rows($result);

  if ($user == 1){
    echo "username already taken !";

  }
  else{
    $query = "INSERT INTO users (first_name, last_name, username, password, contact, email, address, position, role) VALUES ('$firstname','$lastname', '$username', '$password', '$contact', '$email', '$address', 'Employee' ,3)";
    $row= mysqli_query($db,$query);

    if(mysqli_affected_rows($db) > 0){
    header("location:employee_details.php");
  }
  else{
    echo "Registration Unsuccessful";
  }
  }
}

// if($user){

//    if($user['username'] === $username){
//       array_push($errors, "Account has not been created. Username has already been taken.");
//    }
//    if($user['email'] === $email){
//       array_push($errors, "Account has not been created. Email has already been taken.");
//    }
//    if($user['contact'] === $contact){
//       array_push($errors, "Account has not been created. Contact number has already been taken.");
//    }
// }

//register intern


  if(isset($_POST['register_intern'])) {
   $firstname = $_POST['first_name'];
   $lastname = $_POST ['last_name'];
   $username = $_POST ['username'];
   $password = $_POST ['password'];
   $contact = $_POST ['contact'];
   $email = $_POST ['email'];
   $address = $_POST ['address'];
   //$position = $_POST ['position'];


   //check db for existing customer
   $user_check_query = "SELECT * FROM users WHERE username = '$username' ";

   $db = mysqli_connect('localhost','root','','hrsystem') or die("unable to connect to database");

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_num_rows($result);

  if ($user == 1){
    echo "username already taken !";

  }
  else{
    $query = "INSERT INTO users (first_name, last_name, username, password, contact, email, address, position, role) VALUES ('$firstname','$lastname', '$username', '$password', '$contact', '$email', '$address', 'Intern' ,0)";
    $row= mysqli_query($db,$query);

    if(mysqli_affected_rows($db) > 0){
    header("location:employee_details.php");
  }
  else{
    echo "Registration Unsuccessful";
  }
  }
}

      
     
      
     

   ?>

