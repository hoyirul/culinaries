<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <?php $query = "select * from cities where city_id='$_GET[id]'"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php $result = mysqli_fetch_array($sql); ?>
  <?php foreach($sql as $row): ?>
  <div class="container">
    <h6 class="float-left">Edit Data City</h6>
    <br><br>
    <form action="./../../app/cities/update.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['city_id'] ?>">
      <div class="form-group">
        <input type="text" required name="city" value="<?= $row['city'] ?>" class="form-control" placeholder="Yogyakarta etc">
      </div>

      <div class="form-group">
        <button class="btn btn-info btn-md">Submit</button>
      </div>
    </form>
  </div>

  <?php endforeach ?>
<?php include './../layouts/footer.php'; ?>