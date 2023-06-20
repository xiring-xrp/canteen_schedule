<?php
    include "connection.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
    }
    
    $query = "SELECT * FROM user_tbl WHERE uid = '$username' && pwd = '$password' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total;

    if($total == 1){
        header('location: dashboard.php?role='.$role);
    }
    else{
        header('location: login.php');
    }
?>