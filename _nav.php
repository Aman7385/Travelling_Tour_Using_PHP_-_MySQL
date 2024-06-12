<?php 

$logdone = false;
// session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $logdone = true;
}
echo '<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg sticky-top" id="navbar" >
    <div class="container ">
      <a class="navbar-brand" href="index.php" id="logo">
        <img src="assest/images/Logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top ">
        <span>T</span>ravelling <span>T</span>our
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


      <div class="collapse navbar-collapse end-0" id="mynavbar" >
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link homeLink active" href="index.php" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link homeLink" href="index.php#about" >About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link homeLink" href="index.php#services">Places</a>
          </li>
          <li class="nav-item">
            <a class="nav-link homeLink" href="Packages.php">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Gallery.php">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link homeLink" href="index.php#about">Contact Us</a>
          </li>

        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="text" placeholder="Search"> -->';

          if (!$logdone) {
            # code...
          echo '<button class="btn btn-primary" type="button" onclick="window.location.href = \'registration.php\';"
            target="_blank">Register</button>

          <button class="btn btn-primary ms-2" type="button" onclick="window.location.href = \'login.php\';" target="_blank">Login</button>';
          }

          if($logdone){
            echo'<button class="btn btn-primary ms-2" type="button" onclick="window.location.href = \'logout.php\';" target="_blank">Logout</button>';
          }
          
        echo'</form>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->';
?>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
      </div>
      <div class="modal-body">
        Please login to continue.
      </div>
      <div class="modal-footer">
        <a href="login.php" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</div>

  