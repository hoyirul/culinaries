<?php

    require '../config.php';

    $id = $_GET['id'];
    
    $query = "delete from cities WHERE city_id=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/cities/index.php?msg=success');
    }else{
        header('location:./../../admin/cities/index.php?msg=errors');
    }
