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

      //to check if the form was submitted
  $name = $_GET['name'];
  $status = "0";
  $mas =$_GET['msg'];

    



$sql = "INSERT INTO chat(name,massger,status) VALUES('$name','$mas','$status')";

if(mysqli_query($conn, $sql)){
  
    header("Location:dh.php?username=$name");


} 

else{
   



}



$conn->close();




  




?>