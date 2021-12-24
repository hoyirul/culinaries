<?php

    require '../config.php';

    if($_POST['confirm'] == $_POST['password']){
        $token = generateRandomString();
        // echo $token;
        $query = "update users set password=md5('$_POST[confirm]'), token=md5('$token') where token='$_POST[token]'";
        $sql = mysqli_query($conn, $query);
        // echo $query;

        if($sql){
            header('location:./../../admin/settings/reset.php?msg=success&token='.$_POST['token']);
        }else{
            header('location:./../../admin/settings/reset.php?errors=errors&token='.$_POST['token']);
        }
    }else{
        header('location:./../../admin/settings/reset.php?match=notmatch&token='.$_POST['token']);
        // echo "Salah";
    }
    