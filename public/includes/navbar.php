<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Holiday Booker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ms-1">
          <a class="nav-link" href="">*Language*</a>
        </li>
        <li class="nav-item ms-1">
          <a class="nav-link" href="">*Currency*</a>
        </li>

        <?php 
        if(isset($_SESSION["logged_in"]) == TRUE)
        {
          echo "<li class='nav-item ms-1'><a class='btn btn-danger' href='logout.php'>logout</a></li>";
        } else {
          echo "<li class='nav-item ms-1'><a class='btn btn-primary' href='login.php'>Login</a></li><li class='nav-item ms-1'><a class='btn btn-primary' href='register.php'>Register</a></li>";
        } ?>
      </ul>
    </div>
  </div>
</nav>