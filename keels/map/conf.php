<?php
// Using database connection file here
include ("Config.php");
$id = $_GET['id'];
$price = $_GET['price']; 
$c = $_GET['conf'];




$sql1 = "UPDATE oder SET price ='$price', location_status='$c'   WHERE id= $id";
       
		
if(mysqli_query($conn, $sql1)){

    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
 
    header("Location:admin-map.php?username=$username");

  }
  else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);

}









?>