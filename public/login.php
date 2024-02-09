<?php

require_once("../config/config.php");
require_once("includes/bootstrap.php");

if($_POST){
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);

  $userAuthenticate = UserManager::login($email, $password);

  if($userAuthenticate == FALSE) {
    $authError = "<p style='color:red;'>Given credentials are incorrect.</p>";
  } else {
    header("LOCATION: index.php");
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/custom.css">
  <title>Login</title>
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
            <?php if(isset($authError)){echo $authError;} ?>
            <form method="post">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="text-center mt-3">
              <p>Don't have an account? <a href="register.php">Sign up</a></p>
              <p>Forgot password? <a href="resetPassword.php">Reset password</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>

</html>