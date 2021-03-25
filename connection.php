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

if($con){
    ?>
    <script>
        alert("Connection Successful");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("No Connection");
    </script>
    <?php
}



?>