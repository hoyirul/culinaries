<?php

    require '../config.php';

    $id = $_GET['id'];
    
    $query = "delete from culinary WHERE id=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/culinaries/index.php?msg=success');
    }else{
        header('location:./../../admin/culinaries/index.php?msg=errors');
    }
