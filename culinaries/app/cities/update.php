<?php

    require '../config.php';

    $id = $_POST['id'];
    
    $query = "update cities set city='$_POST[city]', updated_at='$updated_at' WHERE city_id=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/cities/index.php?msg=success');
    }else{
        header('location:./../../admin/cities/index.php?msg=errors');
    }


