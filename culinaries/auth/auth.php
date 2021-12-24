<?php
  session_start();

  if($_SESSION['sess_id']){
    header('location:./../admin/home');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
  <div class="p-5"></div>
  <div class="container mt-2">
    <div class="row justify-content-center align-items-center text-center p-2">
      <div class="m-1 col-sm-8 col-md-6 col-lg-4 shadow-sm p-3 mb-5 bg-white border rounded">
        <div class="pt-5 pb-5">
          <img class="rounded mx-auto d-block" src="https://freelogovector.net/wp-content/uploads/logo-images-13/microsoft-cortana-logo-vector-73233.png" alt="" width=70px height=70px>
          <p class="text-center text-uppercase mt-3">Login</p>
          
          <?php if($_GET['errors'] == 'errors'): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Login Failed!</strong> Check your username or password!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif ?>

          <form class="form text-center" action="./../app/auth/auth.php" method="POST">
            <div class="form-group input-group-md">
              <input type="text" class="form-control" required name="username" id="username" aria-describedby="usernameHelp" placeholder="Enter username">
              <!--<div class="invalid-feedback">
                Errors in email during form validation, also add .is-invalid class to the input fields
              </div> -->
            </div>
            <div class="form-group input-group-md">
              <input type="password" minlength="6" class="form-control" required name="password" id="password" placeholder="Password">
              <!--<div class="invalid-feedback">
                Errors in password during form validation, also add .is-invalid class to the input fields
              </div> -->
            </div>
            <button class="btn btn-lg btn-block btn-primary mt-4" name="btn-submit" type="submit">Login</button>
            <a href="./forgot.php" class="float-right mt-2">Forgot Password? </a>
          </form>
        </div>
        <a href="./../" class="text-center d-block mt-2">Home Page</a>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>