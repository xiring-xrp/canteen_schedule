<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "canteen";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if($db){
        // echo "Connection Successfully!!!";
    }else{
        echo "Connection Failed!!!";
    }
?>