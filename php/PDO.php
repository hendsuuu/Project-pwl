<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "hendra";

//Create connection
try{
    $conn = new PDO("mysql:host=$servername;dbname=$myDB",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";

}
catch(PDOException $e){
    echo "connection failed: " . $e->getMessage();
}
?>