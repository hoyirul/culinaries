<?php require './../../app/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Culinaries 2021 | Applications.</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <style>
    .page-item{
      margin: 0 !important;
    }
  </style>
</head>

<body>
  <nav id="head" class="navbar nav navbar-expand-lg fixed-top" onscroll="Scroll()">
    <div class="nav-box">
    </div>
    <a class="navbar-brand" href="#"><b class="brand-var">:Culinaries</b></a>
    <div class="toggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <div class="collapse pl-5 navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto topnav">
        <li class="nav-item">
          <a class="nav-link" href="./../#beranda">Beranda <span class="sr-only">(current)</span></a>
          <!-- <a class="nav-link actived" href="/#beranda">Beranda <span class="sr-only">(current)</span></a> -->
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./index.php">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./../#services">Layanan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./../#teori">Teori</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./../#about">Tentang</a>
        </li>
      </ul>
      <div class="form-inline pr-15 my-2 my-lg-0">
        <a href="./../../auth/auth.php" class="btn btn-app">Masuk</a>
      </div>
    </div>
  </nav>

  <section class="content">
  <!-- MAIN-TOP -->
    <div class="p-5"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 style="font-weight: bold" class="title float-left">Blog | Culinaeries </h5> 
          <?php if(empty($_GET['key']) and empty($_GET['category_id']) and empty($_GET['city_id'])): ?>
          <?php else: ?>
            <a href="./" class="float-right">Show All</a>
          <?php endif ?>
        </div>
      </div>
      <br>
      <form action="./index.php" method="GET">
        <div class="form-group row">
          <div class="col-md-3">
            <?php $qCategories = "select * from categories"; ?>
            <?php $sCategories = mysqli_query($conn, $qCategories); ?>
            <select name="category_id" class="form-control">          
              <?php foreach($sCategories as $key): ?>
                <option value="<?= $key['category_id'] ?>" <?= ($_GET['category_id'] == $key['category_id']) ? 'selected' : '' ?>><?= $key['category'] ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="col-md-3">
            <?php $qCities = "select * from cities"; ?>
            <?php $sCities = mysqli_query($conn, $qCities); ?>
            <select name="city_id" class="form-control">          
              <?php foreach($sCities as $key): ?>
                <option value="<?= $key['city_id'] ?>" <?= ($_GET['city_id'] == $key['city_id']) ? 'selected' : '' ?>><?= $key['city'] ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="col-md-4">
            <input type="text" name="key" value="<?= $_GET['key'] ?>" class="form-control" placeholder="Search here">
          </div>

          <div class="col-md-2">
            <button class="btn btn-app btn-block">Filter</button>
          </div>
          
        </div>
      </form>
      <br>
      <div class="row">
        <?php $query = ''; ?>
        <?php if(empty($_GET['category_id']) || empty($_GET['city_id']) || empty($_GET['key'])): ?>
          <?php $query = "select * from culinary cl inner join cities ct on ct.city_id = cl.city_id inner join categories ca on ca.category_id = cl.category_id"; ?>
        <?php else: ?>
          <?php $query = "select * from culinary cl inner join cities ct on ct.city_id = cl.city_id inner join categories ca on ca.category_id = cl.category_id where cl.category_id = $_GET[category_id] or cl.city_id = $_GET[city_id] or cl.title like '%$_GET[key]%'"; ?>
        <?php endif ?>
        <?php $sql = mysqli_query($conn, $query); ?>
        <?php foreach($sql as $row): ?>

        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="./../../app/culinaries/<?= $row['img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $row['title'] ?></h5>
              <span class="badge badge-primary"><?= $row['city'] ?> </span>
              <span class="badge badge-success"><?= $row['category'] ?> </span>
              <p class="card-text"><?= substr($row['content'], 0, 150) ?>....</p>
              <p style="font-size: 10pt">Updated : <?= $row['updated_at'] ?></p>
              <a href="./detail.php?id=<?= $row['id'] ?>" class="btn btn-app float-right">Read More</a>
            </div>
          </div>
        </div>

        <?php endforeach ?>
      </div>
    </div>
  
    <div class="p-3"></div>
    <!-- FOOTER -->
    <footer class="text-center">
      <p class="text-dark">© 2021 Culinaries | Culinaries is a trademark of Web Programming</p>
    </footer>
    <!-- END FOOTER -->
  </div>
  <!-- END MAIN BOTTOM -->

  </section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="./../js/nav.js"></script>
<script src="./../js/navigation.js"></script>

<script>
  $(document).ready(function() {
    $('#basic-table').DataTable();
    //$('select').select2();
  });
</script>
</body>
</html>