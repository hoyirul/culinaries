<?php

    require '../config.php';

    $id = $_GET['id'];
    
    $query = "delete from categories WHERE category_id=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/categories/index.php?msg=success');
    }else{
        header('location:./../../admin/categories/index.php?msg=errors');
    }
