<?php

    require '../config.php';

    $query = 'select * from users where username="'.$_POST['username'].'"';
    $sql = mysqli_query($conn, $query);

    $num_rows = mysqli_num_rows($sql);
    $row = mysqli_fetch_array($sql);

    if($num_rows > 0){
        header('location:./../../auth/reset.php?token='.$row['token']);
    }else{
        header('location:./../../auth/forgot.php?errors=errors');
    }