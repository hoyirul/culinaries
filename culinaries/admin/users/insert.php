<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <div class="container">
    <h6 class="float-left">Add New Users</h6>
    <br><br>

    <?php if($_GET['match'] == 'notmatch'): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Confirm passwords are not the same!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif ?>

    <form action="./../../app/users/insert.php" method="POST">
      <label for="">Name : </label>
      <div class="form-group">
        <input type="text" required name="name" class="form-control" placeholder="John Doe">
      </div>

      <label for="">Username : </label>
      <div class="form-group">
        <input type="text" required name="username" class="form-control" placeholder="johndoe">
      </div>

      <label for="">Password : </label>
      <div class="form-group">
        <input type="password" required name="password" class="form-control" minlength="6" placeholder="*******">
      </div>

      <label for="">Confirm Password : </label>
      <div class="form-group">
        <input type="password" required name="confirm" class="form-control" minlength="6" placeholder="*******">
      </div>

      <div class="form-group">
        <button class="btn btn-info btn-md">Submit</button>
      </div>

    </form>
  </div>
<?php include './../layouts/footer.php'; ?>