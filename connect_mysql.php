<!-- PHP Connect to MySQL Server
1. MySQli(Improved MySQL)
    -Procedural
    -Object Oriented
2. PDO (PHP Data Objects)

1.MySQli
$conn = mysqli_connect("hostname","username",
        "password","databasename");

$conn = new mysqli("hostname","username",
        "password","databasename"); -->

<?php

$conn = mysqli_connect("localhost:8082","root","");

if($conn === false){
    die("could not connect with server."."</br".mysqli_connect_error());
}

echo "connect successfully."."</br>".mysqli_get_host_info($conn);
mysqli_close($conn);


?>