<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <div class="container">
    <h6 class="float-left">Add Data Categories</h6>
    <br><br>
    <form action="./../../app/categories/insert.php" method="POST">
      <div class="form-group">
        <input type="text" required name="category" class="form-control" placeholder="Yogyakarta etc">
      </div>

      <div class="form-group">
        <button class="btn btn-info btn-md">Submit</button>
      </div>
    </form>
  </div>
<?php include './../layouts/footer.php'; ?>