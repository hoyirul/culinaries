<?php
  session_start();
  require './../../app/config.php';

  if(!$_SESSION['sess_id']){
    header('location:./../../auth/auth.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Admin Culinaries</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="./../assets/css/style.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Culinaeries Apps</h3>
      </div>

      <ul class="list-unstyled components">
        <p class="text-center"><?= $_SESSION['sess_name'] ?></p>
        <li>
          <a href="./../home">Home</a>
        </li>
        <li>
          <a href="./../culinaries">Posts</a>
        </li>
        <li>
          <a href="./../categories">Categories</a>
        </li>
        <li>
          <a href="./../cities">Cities</a>
        </li>
        <li>
          <a href="./../users">Manage Users</a>
        </li>
        <li>
          <a href="./../settings?uid=<?= $_SESSION['sess_id'] ?>">Settings</a>
        </li>
      </ul>

      <ul class="list-unstyled CTAs">
          <li>
              <a href="./../../app/auth/destroy.php" onclick="return confirm('Are you sure?')" class="download">Logout</a>
          </li>
      </ul>
      
    </nav>

    <div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-align-left"></i>
          <span>Toggle Sidebar</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./../../app/auth/destroy.php" onclick="return confirm('Are your sure?')">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>