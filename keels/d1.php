<?php


$servername = "127.0.0.1:3307 ";
$username = "root";
$password = "";
$dbname = "keels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {       //to check if the form was submitted
    $username= $_POST['username1'];
    $email =$_POST["email"];
    $password =$_POST["password"];
    $fullname =$_POST["fullname"];

 
    $gender =$_POST["gender"];
    
    
    $city =$_POST["city"];
    $state =$_POST["state"];



$sql = "INSERT INTO user(username,email,password,fullname,gender,city,stay) VALUES('$username', '$email ', '$password','$fullname','$gender','$city','$state')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



$conn->close();


   }


  




?>