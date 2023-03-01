<?php
// Lines 0 - 193 written by William Hilton
// The propertyInfo file displays specific information about a property including filters, images, and a description of the property.
// Buyers and renters may request additional information about a property using the Request Information form.
session_start();
?>

<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php include("includes/connect.php"); ?>

<?php
// Get property id
$propId = $_GET['id'];

$sql = "SELECT adv.ADVERTISEMENT_ID, ADDRESS_NUMBER, ADDRESS_STREET, ADDRESS_CITY, ADDRESS_STATE, ADVERTISEMENT_PRICE, IMAGE_BINARY, ADVERTISEMENT_DESCRIPTION,
               NUMBER_OF_BEDROOMS, NUMBER_OF_BATHROOMS, SQR_FEET, ACRES,
               HAS_DRYER, HAS_WASHER, HAS_DISHWASHER, HAS_FREEZER, HAS_REFRIDGERATOR, HAS_OVEN,
               HAS_CEILING_FAN, HAS_AIR_CONDITIONING, HAS_HEATING,
               HAS_CONCRETE_FLOORING, HAS_VINYLL_FLOORING, HAS_HARDWOOD_FLOORING, HAS_CERAMIC_TILE_FLOORING, HAS_LAMINATE_FLOORING, HAS_TILE_FLOORING
        FROM [ADVERTISEMENT].[ADVERTISEMENT] as adv

        INNER JOIN [ADVERTISEMENT].[ADVERTISEMENT_IMAGE] AS img ON adv.ADVERTISEMENT_ID = img.ADVERTISEMENT_ID

        WHERE adv.ADVERTISEMENT_ID = '$propId'";

$stmt = sqlsrv_prepare($conn, $sql);

if (sqlsrv_execute($stmt) === false) {
  echo "</br> error";
} else { ?>

  <div class="container p-5">

    <?php
    // return results
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
      // Assign values to each filter name
      $appliances = array (
        array("Dryer", $row['HAS_DRYER']),
        array("Washer", $row['HAS_WASHER']),
        array("Dishwasher", $row['HAS_DISHWASHER']),
        array("Freezer", $row['HAS_FREEZER']),
        array("Refridgerator", $row['HAS_REFRIDGERATOR']),
        array("Oven", $row['HAS_OVEN'])
      );

      $ventilation = array (
        array("Ceiling Fan", $row['HAS_CEILING_FAN']),
        array("Air Conditioning", $row["HAS_AIR_CONDITIONING"]),
        array("Heating", $row['HAS_HEATING'])
      );

      $flooring = array (
        array("Concrete", $row['HAS_CONCRETE_FLOORING']),
        array("Vinyll", $row['HAS_VINYLL_FLOORING']),
        array("Hardwood", $row['HAS_HARDWOOD_FLOORING']),
        array("Ceramic Tiles", $row['HAS_CERAMIC_TILE_FLOORING']),
        array("Laminate", $row['HAS_LAMINATE_FLOORING']),
        array("Tiles", $row['HAS_TILE_FLOORING'])
      );

      ?>
      <div class="row justify-content-center p-4">
      <div class="col-12 col-md-12 col-lg-7 card m-2 p-3">
  
        <div id="carousel" class="carousel slide carousel-fade">
  
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="data:image;base64,<?=base64_encode($row['IMAGE_BINARY']) ?>" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/img2.jpg" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/img3.jpg" class="d-block w-100 rounded" alt="...">
            </div>
          </div>
  
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
  
          <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
  
        </div>
  
        <div class="text-start mt-5 mb-5">
          <h2><?= $row['ADDRESS_NUMBER'] . ' ' . $row['ADDRESS_STREET'] . ', ' . $row['ADDRESS_CITY'] . ', ' . $row['ADDRESS_STATE']; ?></h2>
          <p><?= $row['ADVERTISEMENT_PRICE'] . ' pcm'; ?></p>
        </div>
  
        <div class="border-top w-100 p-3"></div>
  
        <h1 class="text-center">Property Information</h1>
        <div class="row justify-content-center text-center">
          <div class="col-12 col-md-12 col-lg-3 p-2">
            <h5><?= $row['NUMBER_OF_BEDROOMS']; ?></h5>
            <h5>Bedrooms</h5>
          </div>
          <div class="col-12 col-md-12 col-lg-3 p-2">
            <h5><?= $row['NUMBER_OF_BATHROOMS']; ?></h5>
            <h5>Total Baths</h5>
          </div>
          <div class="col-12 col-md-12 col-lg-3 p-2">
            <h5><?= $row['SQR_FEET']; ?></h5>
            <h5>Square Feet</h5>
          </div>
          <div class="col-12 col-md-12 col-lg-3 p-2">
            <h5><?= $row['ACRES']; ?></h5>
            <h5>Acres</h5>
          </div>
  
  
        </div>
  
        <p><?= $row['ADVERTISEMENT_DESCRIPTION']; ?></p>
  
      </div>
  
  
      <div class="col-12 col-md-12 col-lg-4 card m-2 p-3 text-center">
        <h1>Unit Features</h1>
  
        <h5 class="bg-dark text-light p-2 rounded">Appliances</h5>
  
        <div class="row text-center justify-content-center align-items-center p-2">
          <?php
                for ($item = 0; $item < count($appliances); $item++) {
                  for ($col = 0; $col < 1; $col++) {
                    // If item is present output item
                    if ($appliances[$item][1] === 1) { ?>
                      <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
                        <?= $appliances[$item][$col]; ?>
                      </div>
                    <?php } 
                  }
          
                } 
          ?>
          
  
        </div>
  
        <h5 class="bg-dark text-light p-2 rounded">Heating & Cooling</h5>
  
        <div class="row text-center justify-content-center align-items-center p-2">
            <?php
              for ($item = 0; $item < count($ventilation); $item++) {
                for ($col = 0; $col < 1; $col++) {
                  // If item is present output item
                  if ($ventilation[$item][1] === 1) { ?>
                    <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
                      <?= $ventilation[$item][$col]; ?>
                    </div>
                  <?php } 
                }
        
              } 
            ?>
        </div>
  
        <h5 class="bg-dark text-light p-2 rounded">Flooring</h5>
  
        <div class="row text-center justify-content-center align-items-center p-2">
          <?php
              for ($item = 0; $item < count($flooring); $item++) {
                for ($col = 0; $col < 1; $col++) {
                  // If item is present output item
                  if ($flooring[$item][1] === 1) { ?>
                    <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
                      <?= $flooring[$item][$col]; ?>
                    </div>
                  <?php } 
                }
        
              } 
          ?>
        </div>
  
      </div>
      
  
    </div>
  
    <div class="row justify-content-center p-3">
  
      <div class="col-12 col-md-12 col-lg-11 card m-2 p-3 text-center">
  
        <h1>Google Maps API</h1>
  
      </div>
  
    
  
      <div class="col-12 col-md-12 col-lg-11 card m-2 p-3">
        <h1>Request Information</h1>
        <form action="submit.php">
          <div class="mb-3">
            <label for="fName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fName" name="fName" placeholder="John">
          </div>
          <div class="mb-3">
            <label for="lName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lName" name="lName" placeholder="Doe">
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="(000) 000-000">
          </div>
          <div class="mb-3">
            <button class="btn btn-dark" type="submit">Contact Owner</button>
          </div>
        </form>
      </div>
  
  
  
    </div>
   <?php } ?>
  </div>

<?php
}
?>

<?php include("includes/footer.php"); ?>