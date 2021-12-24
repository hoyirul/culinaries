<?php
    session_start();

    require '../config.php';

    $query = 'select * from users where username="'.$_POST['username'].'" and password="'. MD5($_POST['password']) .'"';
    $sql = mysqli_query($conn, $query);

    $num_rows = mysqli_num_rows($sql);
    $row = mysqli_fetch_array($sql);

    if($num_rows > 0){
        $_SESSION['sess_id'] = $row['uid'];
        $_SESSION['sess_name'] = $row['name'];
        $_SESSION['sess_user'] = $row['username'];
        $_SESSION['sess_token'] = $row['token'];
        header('location:./../../admin/home');
    }else{
        header('location:./../../auth/auth.php?errors=errors');
    }