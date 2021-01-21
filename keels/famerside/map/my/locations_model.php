<?php
require("db.php");


// Gets data from URL parameters.



function get_all_locations(){

    $description =$_GET['username'];

    $con=mysqli_connect ("127.0.0.1:3307", 'root', '','keels');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"select id ,lat,lng,username,email,phone,image,city,category,amount,area,location_status from oder WHERE username= '$description'");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
  $indexed = array_map('array_values', $rows);
  //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}






   

   

    
      








?>





