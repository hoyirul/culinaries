<?php

    require '../config.php';
    
    $files = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $files);
    
    $query = "insert into culinary values(null, $_POST[city_id], $_POST[category_id], $_POST[uid], '$_POST[title]', '$_POST[content]', '$files', '$created_at', '$updated_at')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/culinaries/index.php?msg=success');
    }else{
        header('location:./../../admin/culinaries/index.php?msg=errors');
    }