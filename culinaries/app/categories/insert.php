<?php

    require '../config.php';
    
    
    $query = "insert into categories values(null, '$_POST[category]', '$created_at', '$updated_at')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/categories/index.php?msg=success');
    }else{
        header('location:./../../admin/categories/index.php?msg=errors');
    }


