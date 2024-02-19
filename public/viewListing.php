<?php

require_once("../config/config.php");
require_once("includes/bootstrap.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/custom.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wnoKdN3DEejzfqX2Ls5KoytbQymC0vMQ/cT5yiSvyoP9fxK/Ktl8ccF+E2x+eM8r" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>$title | Holiday Booker</title>

</head>

<body>
  <?php require_once("includes/navbar.php"); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col"></div>
      <div class="col">
        <!-- Carousel -->
        <div id="demo" class="carousel slide listing-carousel" data-bs-ride="carousel">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/netherlands.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="img/greece.png" alt="Chicago" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="img/spain.png" alt="New York" class="d-block" style="width:100%">
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="pt-5">$title $rating</h1>
        <p>$description</p>
      </div>
      <div class="col pt-5">
        <div class="card">
          <div class="card-contents px-3">
            <h2 class="py-3">$pricepernight</h2>
            <div class="datepickerrange py-2">
              <input type="date" class="form-control">
            </div>
            <div class="guests">
              <input type="number" class="form-control" placeholder="Guests">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>