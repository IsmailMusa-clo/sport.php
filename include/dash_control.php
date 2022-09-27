<?php


if (array_key_exists("add_sport", $_POST)) {
$error = "";
$s_name = $_POST['sport_type']; 
$telgram = $_POST['telgram'];
if (!$s_name) {   
     $error = "sport name is required <br>"; 
     }  
if (!$telgram) { 
         $error = "telgram is required <br>"; 
    }
if ($error != null) {
echo $error = "<b>There were error(s) in your form!</b><br>" . $error;
}
else {
    //matching username and password
    $query = "SELECT sport_name FROM sports WHERE sport_name =$s_name";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0){
        echo $error .= "<p>sport has  already!</p>";
    }   
    else {
            $query="INSERT INTO `sports`(`sport_name`, `sport_telgram`)
            VALUES ('$s_name','$telgram')";
            if (!mysqli_query($conn, $query)) {
            $error = "<p>Could not add you sport - please try again.</p>";
            }
            else {
                header('Location:index.php');
            }
    }
}
}


if (array_key_exists("add_coach", $_POST)) {
$error = "";
$c_name = $_POST['c_name']; 
$sport = $_POST['sport'];
$password = $_POST['password'];
if (!$c_name) {   
     $error = "coach name is required <br>"; 
     }  
if (!$sport) { 
         $error = "sport is required <br>"; 
    }
if (!$password) { 
         $error = "password is required <br>"; 
    }
if ($error != null) {
echo $error = "<b>There were error(s) in your form!</b><br>" . $error;
}
else {
    //matching username and password
    $query = "SELECT c_name FROM couchs WHERE c_name =$c_name";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0){
        echo $error .= "<p>coach has  already!</p>";
    }   
    else {
            $query="INSERT INTO couchs(c_name, c_sport,`password`) 
            VALUES ('$c_name','$sport','$password')";
            if (!mysqli_query($conn, $query)) {
            $error = "<p>Could not add you sport - please try again.</p>";
            }
            else {
                header('Location:index.php');
            }
    }
}
}



?>