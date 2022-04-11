<?php
    include "PDO.php";
    $sql = "insert into message(id,message)
    values(1,$_POST['message'])";
    if($conn->query($sql)===TRUE){
        echo "new records created succesfully";
    }
    else{
        echo "error: ".$sql."<br>". $conn->error;
    }

    $conn->close();

?>