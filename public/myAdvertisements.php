<?php
session_start();
if(!isset($_SESSION["login"])) {
  echo "not logged in";
  header("location:login.php");
}
  
?>



<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container justify-content-center align-items-center text-center p-5">

  <h1>My Advertisements</h1>

  <div class="d-flex align-items-center justify-content-center">
    <div class="m-2 p-3 border rounded w-75">
        <div class="row text-center align-items-center justify-content-center">
          <div class="col-12 col-md-8 col-lg-4 p-3">
            <img src="/images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" class="img-fluid rounded">
          </div>
          <div class="col-12 col-md-8 col-lg-4 text-start col p-3">
            <h1>390 pcm</h1>
            <p>House | 4 Beds | 2 Bath | 688 sqft</p>
            <p>48 Roebuck Road, Crookesmoor, Sheffield</p>
            <a href="propertyInfo.php" class="link-dark">View Details</a>
          </div>
          <div class="col-12 col-md-8 col-lg-4 p-3">
            <h1>Time Left</h1>
            <h2>01:20:23</h2>
            <a href="payment.php" class="btn btn-dark p-3">Add Time</a>
          </div>
        </div>
    </div>
  </div>
  
  <div class="d-flex align-items-center justify-content-center">
    <div class="m-2 p-3 border rounded w-75">
        <div class="row text-center align-items-center justify-content-center">
          <div class="col-12 col-md-8 col-lg-4 p-3">
            <img src="/images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" class="img-fluid rounded">
          </div>
          <div class="col-12 col-md-8 col-lg-4 text-start col p-3">
            <h1>390 pcm</h1>
            <p>House | 4 Beds | 2 Bath | 688 sqft</p>
            <p>48 Roebuck Road, Crookesmoor, Sheffield</p>
            <a href="propertyInfo.php" class="link-dark">View Details</a>
          </div>
          <div class="col-12 col-md-8 col-lg-4 p-3">
            <h1>Time Left</h1>
            <h2>01:20:23</h2>
            <a href="payment.php" class="btn btn-dark p-3">Add Time</a>
          </div>
        </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>