<?php
session_start();


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
    $username= $_POST['username'];
    $email =$_POST["email"];
    $fullname =$_POST["fullname"];
    $category =$_POST["category"];
 
    $dob =$_POST["dob"];
    $area =$_POST["area"];

    $a=date($dob);

    $amount=$_POST["amount"];

    $today=date("Y/m/d");

    $city =$_POST["city"];
    $phone =$_POST["phone"];

    $dp =$_POST["dp"];
    $start =$_POST["start"];
    
    $b=date($start);

   

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



       
       
   




$sql = "INSERT INTO oder(username,email,fullname,image,city,phone,amount,dob,category,desription,startdate,area) VALUES('$username','$email','$fullname','{$image}','$city',' $phone','$amount','$a','$category','$dp','$b','$area')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
 
    header("Location:dh.php");
                
                





        
    }

       else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}






$conn->close();








   


  
}



?>