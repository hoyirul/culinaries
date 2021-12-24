<?php
    session_start();

    require '../config.php';

    unset($_SESSION);
    session_destroy();
    header('location:./../../auth/auth.php');