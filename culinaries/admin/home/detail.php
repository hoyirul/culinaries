<?php include './../layouts/header.php'; ?>
  <div class="container">
    <h6>Home / Culinaries</h6><br>
    <div class="row">

      <?php $query = "select * from culinary where id='$_GET[id]'"; ?>
      <?php $sql = mysqli_query($conn, $query); ?>
      <?php foreach($sql as $row): ?>

        <div class="col-md-12">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="./../../app/culinaries/<?= $row['img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $row['title'] ?></h5>
              <p>Last Updated : <?= $row['updated_at'] ?></p>
              <p class="card-text"><?= $row['content'] ?></p>
              <a href="./../culinaries/edit.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit Posts</a>
            </div>
          </div>
        </div>

      <?php endforeach ?>
    </div>
  </div>
<?php include './../layouts/footer.php'; ?>