<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <div class="container">
    <h6 class="float-left">Add Data City</h6>
    <br><br>
    <form action="./../../app/cities/insert.php" method="POST">
      <div class="form-group">
        <input type="text" required name="city" class="form-control" placeholder="Yogyakarta etc">
      </div>

      <div class="form-group">
        <button class="btn btn-info btn-md">Submit</button>
      </div>
    </form>
  </div>
<?php include './../layouts/footer.php'; ?>