<?php
// object oriented way to connect to MySQL Database
$conn = new mysqli("localhost", "root", "");

// check Connection 
if($conn === false){
	//die function used to print result
    die("Could not connect with server " .$conn->connect_error);
}
//host_info print the host information

echo "connected successfully."."</br>".$conn ->host_info;

//close used to close the connection with server 
$conn->close();


?>