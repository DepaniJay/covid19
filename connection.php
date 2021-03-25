<?php

// Remote server Connection

$server = "remotemysql.com";
$username = "ROLazsorpS";
$password = "KUYSrzJXnK";
$db = "ROLazsorpS";
$port = 3306;

$con = mysqli_connect($server,$username,$password,$db,$port);

// Localserver Connections

// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "test";

// $con = mysqli_connect($server,$username,$password,$db);


// Localserver notify me when database is connected with my website
// if($con){
//     echo "Connection Successful";
// }else{
//     echo "No Connection";
// }



?>