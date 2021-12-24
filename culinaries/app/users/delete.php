<?php

    require '../config.php';

    $id = $_GET['id'];
    
    $query = "delete from users WHERE uid=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/users/index.php?msg=success');
    }else{
        header('location:./../../admin/users/index.php?msg=errors');
    }
