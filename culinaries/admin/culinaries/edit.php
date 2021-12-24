<?php include './../layouts/header.php'; ?>
<!-- Page Content  -->

  <?php $query = "select * from culinary where id='$_GET[id]'"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php foreach($sql as $row): ?>
    <div class="container">
      <h6 class="float-left">Edit Data Posts</h6>
      <br><br>
      <form action="./../../app/culinaries/update.php" method="POST" enctype="multipart/form-data">
        
        <label for="">Author : <?= $_SESSION['sess_name'] ?></label>
        <div class="form-group">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <input type="text" required name="uid" readonly class="form-control" value="<?= $_SESSION['sess_id'] ?>">
        </div>

        <label for="">From : </label>
        <div class="form-group">
          <?php $qCities = "select * from cities"; ?>
          <?php $sCities = mysqli_query($conn, $qCities); ?>
          <select name="city_id" class="form-control">          
            <?php foreach($sCities as $key): ?>
              <option value="<?= $key['city_id'] ?>" <?= ($key['city_id'] == $row['city_id']) ? 'selected' : '' ?> ><?= $key['city'] ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <label for="">Category : </label>
        <div class="form-group">
          <?php $qCategories = "select * from categories"; ?>
          <?php $sCategories = mysqli_query($conn, $qCategories); ?>
          <select name="category_id" class="form-control">          
            <?php foreach($sCategories as $key): ?>
              <option value="<?= $key['category_id'] ?>" <?= ($key['category_id'] == $row['category_id']) ? 'selected' : '' ?> ><?= $key['category'] ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <label for="">Title : </label>
        <div class="form-group">
          <input type="text" required name="title" class="form-control" value="<?= $row['title'] ?>" placeholder="Soto Ayam, Rawon etc.">
        </div>

        <label for="">Content : </label>
        <div class="form-group">
          <textarea style="height: 400px" name="content" id="editor"><?= $row['content'] ?></textarea>
        </div>

        <label for="">Image : </label>
        <div class="form-group">
          <span><?= $row['img'] ?></span>
          <input type="file" name="img" class="form-control">
        </div>

        <div class="form-group">
          <button class="btn btn-info btn-md">Submit</button>
        </div>
      </form>
    </div>
  <?php endforeach ?>
<?php include './../layouts/footer.php'; ?>

