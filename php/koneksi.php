<?php
$servername = "localhost";
$ussername = "root";
$password = "";

//Create connection
$conn = mysqli_connect($servername,$ussername,$password);

//Check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>