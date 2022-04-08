<?php
$data=file_get_contents('model/pizza.json');
$menu=json_decode($data,true);
$menu=$menu["menu"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="views/style.css"/>
    <title>Pizzahub</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand ml-3" href="#">Pizzahub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Pizza</a>
        <a class="nav-link" href="#">Drink</a>
        <a class="nav-link" href="#">Other</a>
      </div>
    </div>
  </div>
</nav>
<!--Main-->
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col">
  <h1 class="h1">All menu</h1>
    </div>
  </div>
  <div class="row">
  <?php foreach ($menu as $row):?>
    <div class="col-md-4 mt-3 pd-3">
      <div class="card">
          <img class="card-img-top" src="assets/img/pizza/<?= $row["gambar"]; ?>" >
            <div class="card-body">
              <h5 class="card-title"><?= $row["nama"] ?></h5>
              <p class="card-text"><?= $row["deskripsi"];?></p>
              <h5 class="card-title">Rp.<?= $row["harga"];?>,-</h5>
              <a href="#" class="btn btn-primary">Beli sekarang!</a></a>
        </div>
      </div>
    </div>
  <? endforeach?>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="views/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>