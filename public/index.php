<?php 

require_once("../config/config.php");
require_once("includes/bootstrap.php");

$users = UserManager::getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/custom.css">
  <title>Holiday Booker</title>
</head>
<body>
  <?php require_once("includes/navbar.php"); ?>
</body>
</html>