<?php

    require '../config.php';
    
    if($_POST['confirm'] == $_POST['password']){
        $token = generateRandomString();
        $query = "insert into users values(null, '$_POST[name]', '$_POST[username]', md5('$_POST[confirm]'), md5('$token'), '$created_at', '$updated_at')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header('location:./../../admin/users/index.php?msg=success');
        }else{
            header('location:./../../admin/users/index.php?msg=errors');
        }
    }else{
        header('location:./../../admin/users/insert.php?match=notmatch');
    }


