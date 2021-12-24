<?php
    session_start();
    require '../config.php';

    $query = "update users set name='$_POST[name]', username='$_POST[username]', updated_at='$updated_at' where uid=$_POST[uid]";
    $sql = mysqli_query($conn, $query);
    // echo $query;

    if($sql){
        header('location:./../../admin/settings/index.php?msg=success&uid='.$_SESSION['sess_id']);
    }else{
        header('location:./../../admin/settings/index.php?msg=errors&uid='.$_SESSION['sess_id']);
    }
    