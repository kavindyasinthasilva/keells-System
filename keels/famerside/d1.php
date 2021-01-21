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
    $nic =$_POST["NIC"];

    



$sql = "INSERT INTO farmers(username,email,password,fullname,gender,city,phone,Nic) VALUES('$username', '$email ', '$password','$fullname','$gender','$city','$state','$nic')";

if(mysqli_query($conn, $sql)){
  

    header("Location:index.php");
    $sql1 = "INSERT INTO oder(username) VALUES('$username')";
    $result = mysqli_query($conn, $sql1) or die( mysqli_error($conn));

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



$conn->close();


   }


  




?>