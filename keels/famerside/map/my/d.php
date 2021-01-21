<?php
// including the database connection file
include_once("Config.php");

if(isset($_POST['Update']) or($_SERVER["REQUEST_METHOD"] == "POST"))
{	
    $id1 = $_POST['id'];
	

    $username =$_POST["user"];

    $email =$_POST["email"];
    $fullname =$_POST["fullname"];
    $category =$_POST["category"];
 

    $area =$_POST["area"];



    $amount=$_POST["amount"];



    $city =$_POST["city"];
    $phone =$_POST["phone"];

    $dp =$_POST["dp"];

	

	$states =$_POST['states'];
    
	
	$lat =$_POST["lat"];
    $lng =$_POST["lng"];

	


	
    // checking empty fields
      
        $sql1 = "UPDATE oder SET  email ='$email', phone ='$phone',amount='$amount', lat = '$lat', lng= '$lng' ,fullname='$fullname'   WHERE id= $id1";
       
		
		if(mysqli_query($conn, $sql1)){
		
			echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
		 
			header("Location:../../dh.php?username=$username");
	
		  }
		  else{
			echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
		
    }
}
?>