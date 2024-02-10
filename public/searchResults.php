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
  <title>Stays in *country* | Holiday Booker</title>
</head>

<body>
  <?php require_once("includes/navbar.php"); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="filter pt-4 ps-4">
          <h1>Filter</h1>
          <div class="filter-form pt-2">
            <h5>Residence type</h5>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1">
              <label class="form-check-label">Apartment</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1">
              <label class="form-check-label">Villa</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1">
              <label class="form-check-label">House</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1">
              <label class="form-check-label">Hotel</label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="pt-3">$number Listings in $country</h3>
        <div class="container-fluid pt-5">
          <div class="stay-result-card py-3 px-3">
            <div class="row g-0">
              <div class="col-md-auto">
                <img src="img/netherlands.png" alt="" class="rounded">
              </div>
              <div class="col-md-auto ps-2">
                <h4 class="pt-1 pe-5">Very luxury apartments somewhere on earth</h4>
                <p>location, country</p>
                <p>Rating: 4 / 5</p>
                <p>Amenities, Amenities, Amenities, Amenities, Amenities </p>
                <div>
                  <p>$totalPrice total</p>
                  <p>$pernachtPrijs per nacht</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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