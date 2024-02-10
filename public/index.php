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
  <title>Holiday Booker</title>
</head>

<body>
  <?php require_once("includes/navbar.php"); ?>
  <div class="container-fluid top-container bg-success d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-white pb-3">Start finding your perfect place to stay!</h1>
    <form method="post">
      <div class="holiday-finder bg-warning py-1 px-1 rounded">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="searchInput" placeholder="Search Country or Place" name="place">
          </div>
          <div class="col">
            <input type="date" class="form-control dateRangePicker" id="dateRangePicker" placeholder="Select Dates" name="dateRange">
          </div>
          <div class="col">
            <input type="number" min="1" class="form-control" placeholder="How many people?" name="guests">
          </div>
        </div>
      </div>
      <ul class="list-group suggestion-list" id="suggestionList"></ul>
    </form>
  </div>
  <div class="container-fluid">
    <h2 class="pt-4 ps-4 pb-4">Check out these populair holiday destinations!</h2>
    <div class="row px-3 ps-3 position-relative">
      <div class="col d-flex justify-content-center position-relative">
        <a href="">
          <div class="popular-destination-card">
            <img src="img/netherlands.png" alt="">
            <h3>Netherlands</h3>
          </div>
        </a>
      </div>
      <div class="col d-flex justify-content-center position-relative">
        <a href="">
          <div class="popular-destination-card">
            <img src="img/greece.png" alt="">
            <h3>Greece</h3>
          </div>
        </a>
      </div>
      <div class="col d-flex justify-content-center position-relative">
        <a href="">
          <div class="popular-destination-card">
            <img src="img/spain.png" alt="">
            <h3>Spain</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>

<script src="js/searchSuggestion.js"></script>
<!-- flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  // Initialize flatpickr with range mode
  flatpickr("#dateRangePicker", {
    mode: 'range',
    dateFormat: "Y-m-d",
  });
</script>

</html>