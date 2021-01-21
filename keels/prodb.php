<?php
   define('DB_SERVER', '127.0.0.1:3307 ');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'userprofile');
   $sk = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if($sk){
    //echo "Connected";

}
else{
    echo"not connected";
}


?>