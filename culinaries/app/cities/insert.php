<?php

    require '../config.php';
    
    
    $query = "insert into cities values(null, '$_POST[city]', '$created_at', '$updated_at')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/cities/index.php?msg=success');
    }else{
        header('location:./../../admin/cities/index.php?msg=errors');
    }


