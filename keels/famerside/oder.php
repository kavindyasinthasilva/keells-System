<?php


if(isset($_GET['save'])) {
 


    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $description =$_GET['description'];
    
    
        
    $username =$_GET['name'];
    $city =$_GET['city'];
    
    
               
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
    
    
        $sql = "INSERT INTO oder(username) VALUES('$username')";
    
        if(mysqli_query($con, $sql)){
            echo "Records added successfully.";
            
            }
        
               else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    
    








}






?>