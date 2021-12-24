<?php

    require '../config.php';

    $id = $_POST['id'];

    if($_POST['confirm'] == $_POST['password']){
        $token = generateRandomString();
        $query = "update users set name='$_POST[name]', username='$_POST[username]', password=md5('$_POST[confirm]'), token=md5('$token'), updated_at='$updated_at' WHERE uid=$id";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header('location:./../../admin/users/index.php?msg=success');
        }else{
            header('location:./../../admin/users/index.php?msg=errors');
        }
    }else{
        header('location:./../../admin/users/update.php?match=notmatch&id='.$id);
    }


