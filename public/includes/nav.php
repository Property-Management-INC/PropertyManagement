<?php
/// Lines 0 - 87 written by William Hilton
// The nav file displays the navigation bar of the website

// Check to see if the user session is active
if (!isset($_SESSION["login"])) { ?>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Property Management INC</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a <?php if ($CURRENT_PAGE == "Index") {?>class="nav-link active" aria-current="page"<?php }?> class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a <?php if ($CURRENT_PAGE == "Listings") {?>class="nav-link active"<?php }?> class="nav-link" href="listings.php">Listings</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Advertise
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="newAdvertisement.php">Submit Advertisement</a></li>
            <li><a class="dropdown-item" href="myAdvertisements.php">My Advertisements</a></li>
          </ul>
        </li>
      </ul>


      <div class="d-flex bg-dark">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">

            <a class="nav-link rounded bg-white text-dark" href="login.php">Sign In</a>

          </li>
        </ul>

      </div>

    </div>
  </div>
</nav>

<!--If the user session is not active update nav view-->
<?php } else { ?>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Property Management INC</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a <?php if ($CURRENT_PAGE == "Index") {?>class="nav-link active" aria-current="page"<?php }?> class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a <?php if ($CURRENT_PAGE == "Listings") {?>class="nav-link active"<?php }?> class="nav-link" href="listings.php">Listings</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Advertise
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="newAdvertisement.php">Submit Advertisement</a></li>
            <li><a class="dropdown-item" href="myAdvertisements.php">My Advertisements</a></li>
          </ul>
        </li>
      </ul>


      <div class="d-flex bg-dark">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">

            <a class="nav-link rounded bg-white text-dark" href="logout.php">Sign Out</a>

          </li>
        </ul>

      </div>

    </div>
  </div>
</nav>

<?php } ?> 