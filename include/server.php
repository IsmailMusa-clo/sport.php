<?php
include('include/linkDB.php');
session_start();
//------ PHP code for User registration form---
$error = "";
if (array_key_exists("signUp", $_POST)) {

  // Database Link
  include('linkDB.php');
  //Taking HTML Form Data from User
  $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
  $sport = filter_var($_POST['sport'], FILTER_SANITIZE_STRING);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

  // PHP form validation PHP code
  if (!$name) {
    $error = "Name is required <br>";
  }
  if (!$phone) {
    $error= "phone is required <br>";
  }
  if (!$password) {
    $error= "Password is required <br>";
  }
  if (!$sport) {
    $error= "sport is required <br>";
  }
  if ($error) {
    echo $error = "<b>There were error(s) in your form!</b> <br>" . $error;
  }
  else {

    //Check if username is already exist in the Database

    $query = "SELECT user_id FROM users WHERE username =$name";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      echo $error .= "<p>Your username has taken already!</p>";
    }
    else {
      //Password encryption or Password Hashing
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO users (username, user_phone,sport_type , user_password)
       VALUES ('$name', '$phone','$sport' ,'$password')";

      if (!mysqli_query($conn, $query)) {
        $error = "<p>Could not sign you up - please try again.</p>";
      }
      else {
        //session variables to keep user logged in
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['name'] = $name;
        $_SESSION['sport'] = $sport;

        //Setcookie function to keep user logged in for long time
        if ($_POST['stayLoggedIn'] == '1') {
          setcookie('id', mysqli_insert_id($conn), time() + 60 * 60 * 365);
        //echo "<p>The cookie id is :". $_COOKIE['id']."</P>";
        }

        //Redirecting user to home page after successfully logged in 
        header("Location:users.php");

      }

    }

  }
}

//-------User Login PHP Code ------------
if (array_key_exists("log", $_POST)) {
// Database Link
  include('linkDB.php');
  $error2 = "";
//Taking form Data From User
$name = $_POST['username'];
$password = $_POST['password'];

//Check if input Field are empty
if (!$name) {
$error2 .= "username is required <br>";
}
if (!$password) {
$error2 .= "Password is required <br>";
}
if ($error2 != null) {
echo $error2 = "<b>There were error(s) in your form!</b><br>" . $error2;
}
else {
//matching username and password
$query = "SELECT * FROM users WHERE username='$name'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if (isset($row)) {
if ($password == $row['user_password']) {
        echo "true ";
//session variables to keep user logged in
$_SESSION['id'] = $row['user_id'];
$_SESSION['name'] = $row['username'];
$_SESSION['sport'] = $row['sport_type'];
//Logged in for long time untill user didn't log out
header("Location:users.php");
}
else {
$error2 = "Combination of username/password does not match!";
}

}
else {
$error2 = "Combination of username/password does not match!";
}
}
}

//-------couch Login PHP Code ------------
if (array_key_exists("cLog", $_POST)) {

  // Database Link
include('linkDB.php');
$error3 = "";
  //Taking form Data From User
    $cname = $_POST['username']; 
     $password = $_POST['password'];
  //Check if input Field are empty 
   if (!$cname) {   
     $error3 = "username is required <br>"; 
     }  
     if (!$password) { 
         $error3 = "Password is required <br>"; 
    }
      if ($error3 != null) { 
           echo $error3 = "<b>There were error(s) in your form!</b><br>" . $error3; 
           } 
           
           else { 
               //matching username and password 
                  $query = "SELECT * FROM couchs WHERE c_name='$cname'"; 
                  $result = mysqli_query($conn, $query); 
                  $row = mysqli_fetch_array($result);
    if (isset($row)){
         if ($password == $row['password']) { 
        //session variables to keep user logged in
            $_SESSION['id'] = $row['c_id'];
            $_SESSION['Cname'] = $row['c_name']; 
            $_SESSION['sport'] = $row['c_sport'];
            $_SESSION['telg'] = $row['c_telgram'];
          
       //Logged in for long time untill user didn't log out
      header("Location:coach.php");   
       } else {
       $error3 = "Combination of username/password does not match!";
    }
    }  else { 
           $error3 = "Combination of username/password does not match!";   
           }
    }
}

//-------admin Login PHP Code ------------
if (array_key_exists("adm_log", $_POST)) {

  // Database Link
include('linkDB.php');
$error3 = "";
  //Taking form Data From User
    $username = $_POST['username']; 
     $password = $_POST['password'];
     echo $username;
  //Check if input Field are empty 
   if (!$username) {   
     $error4 = "username is required <br>"; 
     }  
     if (!$password) { 
         $error4 = "Password is required <br>"; 
    }
      if ($error4 != null) { 
           echo $error4 = "<b>There were error(s) in your form!</b><br>" . $error4; 
           } else { 
               if ($password=="kh_admin"&&$username=="kh_admin") {
                  $_SESSION['admin_auth']=$username;
                  header('Location:dashboard.php');
               }
               else{
                    $error3="خطأ في كلمة المرور او اسم المستخدم";
                    echo $error3 = "<b>There were error(s) in your form!</b><br>" . $error3;
                  }
    }
}

?>