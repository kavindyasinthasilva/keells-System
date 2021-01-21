
	<?php
// including the database connection file
include_once("Config.php");

if(isset($_POST['update']))
{	
    $id1 = $_POST['id'];
	
	$username= $_POST["username"];
    $email =$_POST["email"];
    $fullname =$_POST["fullname"];
    $category =$_POST["category"];
 

    $area =$_POST["area"];



    $amount=$_POST["amount"];



    $city =$_POST["city"];
    $phone =$_POST["phone"];

    $dp =$_POST["dp"];

	
	$price =$_POST["price"];
    $states =$_POST['states'];
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   

    

    
       if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
        $image=basename( $_FILES["imageUpload"]["name"],".jpg"); 


    
	

    $sql1 = " UPDATE oder SET username='$username', email ='$email', phone='$phone',desription='$dp',category =' $category',amount='$amount',image='{$image}',fullname='$fullname ',area =' $area',states='$states',price='$price' WHERE id=$id1";
       
		
		if(mysqli_query($conn, $sql1)){
			echo "Update successfully.";
		 
			header("Location:osertable.php");
		  }
		  else{
			echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
		
    }
}
?>