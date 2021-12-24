<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <div class="container">
    <h6 class="float-left">Add Data Categories</h6>
    <br><br>
    <?php if($_GET['msg'] == 'success'): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Data saved successfully!.
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
    <?php endif ?>
    
    <?php $query = "select * from users where uid=$_GET[uid]"; ?>
    <?php $sql = mysqli_query($conn, $query); ?>
    <?php foreach($sql as $row): ?>
      <form action="./../../app/settings/update.php" method="POST">
        <label for="">Name : </label>
        <div class="form-group">
          <input type="hidden" name="uid" value="<?= $row['uid'] ?>">
          <input type="text" required name="name" class="form-control" value="<?= $row['name'] ?>">
        </div>

        <label for="">Username : </label>
        <div class="form-group">
          <input type="text" required name="username" class="form-control" value="<?= $row['username'] ?>">
        </div>

        <label for="">Token User : </label>
        <div class="form-group">
          <input type="text" required name="token" readonly class="form-control" value="<?= $row['token'] ?>">
        </div>

        <div class="form-group">
          <button class="btn btn-info btn-md">Update Profile</button>
          <a href="./reset.php?token=<?= $row['token'] ?>" class="btn btn-secondary">Change Password</a>
        </div>
      </form>
    <?php endforeach ?>
  </div>
<?php include './../layouts/footer.php'; ?>