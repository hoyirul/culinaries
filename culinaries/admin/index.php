<?php

    if(!$_SESSION['sess_id']){
        header('location:./../auth/auth.php');
    }else{
        header('location:./home/');
    }