<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <div class="container">
    <h6 class="float-left">Add Data Categories</h6>
    <br><br>
    <?php if($_GET['msg'] == 'success'): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Password changed successfully!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php elseif($_GET['msg'] == 'errors'): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Errors!</strong> Data failed to save!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php elseif($_GET['match'] == 'notmatch'): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Confirm passwords are not the same!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif ?>

    <form action="./../../app/settings/reset.php" method="POST">
      <label for="">Password : </label>
      <div class="form-group">
        <input type="hidden" name="token" value="<?= $_GET['token'] ?>">
        <input type="password" required name="password" minlength="6" class="form-control">
      </div>

      <label for="">Confirm Password : </label>
      <div class="form-group">
      <input type="password" required name="confirm" minlength="6" class="form-control">
      </div>

      <div class="form-group">
        <button class="btn btn-info btn-md">Change Password</button>
        <a href="./index.php?uid=<?= $_SESSION['sess_id'] ?>" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
<?php include './../layouts/footer.php'; ?>