<?php

    require '../config.php';

    $id = $_POST['id'];
    
    $files = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $files);

    $query = '';

    if(empty($files)){
        $query = "update culinary set city_id='$_POST[city_id]', category_id='$_POST[category_id]', uid='$_POST[uid]', title='$_POST[title]', content='$_POST[content]', updated_at='$updated_at' WHERE id=$id";
    }else{
        $query = "update culinary set city_id='$_POST[city_id]', category_id='$_POST[category_id]', uid='$_POST[uid]', title='$_POST[title]', content='$_POST[content]', img='$files', updated_at='$updated_at' WHERE id=$id";
    }
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../admin/culinaries/index.php?msg=success');
    }else{
        header('location:./../../admin/culinaries/index.php?msg=errors');
    }


