<?php

    require '../config.php';

    $id = $_POST['id'];
    
    $query = "update categories set category='$_POST[category]', updated_at='$updated_at' WHERE category_id=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/categories/index.php?msg=success');
    }else{
        header('location:./../../admin/categories/index.php?msg=errors');
    }


