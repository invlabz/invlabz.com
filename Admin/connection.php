<?php

$server_name = "localhost";
$db_username = "fmakcpcu_invlabz";
$db_password = "Saumya@123";
$db_name = "fmakcpcu_invlabz";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if ($connection->connect_error) {

    die("Connection failed: " . $conn->connect_error);
  
}
 

?>
