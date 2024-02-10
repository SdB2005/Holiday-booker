<?php

require_once("../config/config.php");
require_once("includes/bootstrap.php");

$countries = CountryManager::getAll();

if ($_POST) {
  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $gender = htmlspecialchars($_POST["gender"]);
  $country = htmlspecialchars($_POST["country"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);

  $userExists = UserManager::userExists($email);

  if (!$userExists) {
    $registration = UserManager::register($firstname, $lastname, $gender, $country, $email, $password);
    if ($registration == true) {
      header("LOCATION: login.php");
    }
  } else {
    $registerError = "A user with this email already exists!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/custom.css">
  <title>Register</title>
</head>

<body>
  <?php require_once("includes/navbar.php"); ?>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col">
        <div class="container">
          <div class="login-container">
            <h2 class="text-center mb-4">Login</h2>
            <?php if (isset($registerError)) {
              echo "<p style='color:red;'>".$registerError."</p>";
            } ?>
            <form method="post">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" required>
                  </div>
                  <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" required>
                  </div>
                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="else">Else</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" name="country" id="country" required>
                      <?php
                      foreach ($countries as $country) {
                        echo "<option value='$country->country_id'>$country->country_name</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <div class="text-center mt-3">
              <p>Already own an account? <a href="login.php">Login</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>

</html>