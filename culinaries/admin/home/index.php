<?php include './../layouts/header.php'; ?>
  <div class="container">
    <h6>Home / Culinaries</h6><br>
    <div class="row">

      <?php $query = "select * from culinary"; ?>
      <?php $sql = mysqli_query($conn, $query); ?>
      <?php foreach($sql as $row): ?>

        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="./../../app/culinaries/<?= $row['img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $row['title'] ?></h5>
              <p class="card-text"><?= substr($row['content'], 0, 150) ?>....</p>
              <p style="font-size: 10pt">Updated : <?= $row['updated_at'] ?></p>
              <a href="./detail.php?id=<?= $row['id'] ?>" class="btn btn-info">Detail Content</a>
            </div>
          </div>
        </div>

      <?php endforeach ?>
    </div>
  </div>
<?php include './../layouts/footer.php'; ?>