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


if (isset($_POST['submit']))

{


    $target_dir = "uploads";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg"); 


    $sql = "UPDATE oder SET image='{$image}' WHERE id=106";

if(mysqli_query($conn, $sql)){
echo "Records added successfully.";


            
             
}

   else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);




   }
}




?>