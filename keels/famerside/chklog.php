<?php

session_start();
include_once('Config.php'); 

//error_reporting(0);

if(isset($_POST["username"]) && isset($_POST["password"])){


  if(isset($_POST["submit"]))

  {


    $username =  $_POST["username"];
    $password_login =$_POST["password"];

    $linku =$username;

  
    
    
   

    

    $username = $_REQUEST["username"];
      $_SESSION["username"] = $username;
    
    $sql = mysqli_query($conn,"SELECT * FROM `farmers` WHERE username='$username'AND password='$password_login' LIMIT 1")or die(mysqli_error($conn));
    
    $userCount = mysqli_num_rows($sql);
    if($userCount == 1){
    while($row = mysqli_fetch_array($sql)){
      $id = $row["id"];
    
      $_SESSION["username"]=$_POST["username"];
    }
    if (isset($_SESSION["username"]) && isset($_POST["username"])){


    $_SESSION["username"] = $username;

    header("Location:dh.php?username=$username");
    
    exit();
    }
    }else{
    echo '<div class="echo">Username/Password is incorrect</div>';
    exit();
    }
    }

    
    


  }


?>


