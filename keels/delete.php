<?php
// Using database connection file here
include ("Config.php");
$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from oder where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:dh.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>