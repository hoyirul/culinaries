<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <?php $query = "select * from categories where category_id='$_GET[id]'"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php $result = mysqli_fetch_array($sql); ?>
  <?php foreach($sql as $row): ?>
  <div class="container">
    <h6 class="float-left">Edit Data Categories</h6>
    <br><br>
    <form action="./../../app/categories/update.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['category_id'] ?>">
      <div class="form-group">
        <input type="text" required name="category" value="<?= $row['category'] ?>" class="form-control" placeholder="Yogyakarta etc">
      </div>

      <div class="form-group">
        <button class="btn btn-info btn-md">Submit</button>
      </div>
    </form>
  </div>

  <?php endforeach ?>
<?php include './../layouts/footer.php'; ?>