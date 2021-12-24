<?php

    require '../config.php';

    if($_POST['confirm'] == $_POST['password']){
        $token = generateRandomString();
        // echo $token;
        $query = "update users set password=md5('$_POST[confirm]'), token=md5('$token') where token='$_POST[token]'";
        $sql = mysqli_query($conn, $query);
        // echo $query;

        if($sql){
            header('location:./../../auth/msg.php?msg=success');
        }else{
            header('location:./../../auth/reset.php?errors=errors');
        }
    }else{
        header('location:./../../auth/reset.php?match=notmatch&token='.$_POST['token']);
        // echo "Salah";
    }
    