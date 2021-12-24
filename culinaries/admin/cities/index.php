<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <div class="container">
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
    <h6 class="float-left">Cities Page</h6>
    <a href="./insert.php" class="btn btn-md btn-info float-right">Add Data</a>
    <br><br>
    <table id="example" class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>City</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php $query = "select * from cities"; ?>
        <?php $sql = mysqli_query($conn, $query); ?>
        <?php $result = mysqli_fetch_array($sql); ?>
        <?php foreach($sql as $row): ?>
          <tr>
            <td width="50" class="text-center"><?= $no++ ?></td>
            <td><?= $row['city'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
            <td>
              <a href="./edit.php?id=<?= $row['city_id'] ?>" onclick="return confirm('Are your sure?')" class="btn btn-sm btn-info">Edit</a>
              <a href="./../../app/cities/delete.php?id=<?= $row['city_id'] ?>" onclick="return confirm('Are your sure?')" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
<?php include './../layouts/footer.php'; ?>