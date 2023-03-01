<?php
// Lines 0 - 249 written by William Hilton
// The listings page displays a condensed view of properties that are available to rent or buy.

session_start();
?>

<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<?php
// Get user input from search bar on form submit (button click)
// Query database for corresponding city, address, region etc. as required
// Apply property filters to query
// Return query results on listing page

include("includes/connect.php");

// Get data
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['propertySearched'])) {
  // Get user input
  $propertySearched = $_GET['propertySearched'];

  // Filters // get instead of post
  $radius = $_GET['radius'];
  $bedrooms = $_GET['bedrooms'];
  $maxPrice = $_GET['maxPrice'];
  $propertyType = $_GET['propertyType'];

  // apply radius filter using Google Maps API
  // LIMIT

  // Apply all or specific filter to property type
  if ($propertyType === "all") {
    $sql = "SELECT adv.ADVERTISEMENT_ID, IMAGE_BINARY, ADDRESS_POSTCODE, ADDRESS_CITY, ADDRESS_STATE, ADDRESS_STREET, PROPERTY_TYPE_NAME, ADVERTISEMENT_PRICE, NUMBER_OF_BEDROOMS, NUMBER_OF_BATHROOMS, SQR_FEET, ADDRESS_NUMBER, ADDRESS_STREET, ADDRESS_CITY, ADDRESS_STATE
    FROM [ADVERTISEMENT].[ADVERTISEMENT] AS adv
    INNER JOIN [ADVERTISEMENT].[PROPERTY_TYPE] AS prop ON adv.PROPERTY_TYPE_ID = prop.PROPERTY_TYPE_ID

    ---PROPERTY IMAGE
    INNER JOIN [ADVERTISEMENT].[ADVERTISEMENT_IMAGE] AS img ON adv.ADVERTISEMENT_ID = img.ADVERTISEMENT_ID

    WHERE ADDRESS_CITY LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice'
    OR ADDRESS_STATE LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice'
    OR ADDRESS_POSTCODE LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice'
    OR ADDRESS_STREET LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice'";
  } else {
    $sql = "SELECT adv.ADVERTISEMENT_ID, IMAGE_BINARY, ADDRESS_POSTCODE, ADDRESS_CITY, ADDRESS_STATE, ADDRESS_STREET, PROPERTY_TYPE_NAME, ADVERTISEMENT_PRICE, NUMBER_OF_BEDROOMS, NUMBER_OF_BATHROOMS, SQR_FEET, ADDRESS_NUMBER, ADDRESS_STREET, ADDRESS_CITY, ADDRESS_STATE
    FROM [ADVERTISEMENT].[ADVERTISEMENT] AS adv
    INNER JOIN [ADVERTISEMENT].[PROPERTY_TYPE] AS prop ON adv.PROPERTY_TYPE_ID = prop.PROPERTY_TYPE_ID

    ---PROPERTY IMAGE
    INNER JOIN [ADVERTISEMENT].[ADVERTISEMENT_IMAGE] AS img ON adv.ADVERTISEMENT_ID = img.ADVERTISEMENT_ID

    WHERE ADDRESS_CITY LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice' AND PROPERTY_TYPE_NAME = '$propertyType'
    OR ADDRESS_STATE LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice' AND PROPERTY_TYPE_NAME = '$propertyType'
    OR ADDRESS_POSTCODE LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice' AND PROPERTY_TYPE_NAME = '$propertyType'
    OR ADDRESS_STREET LIKE '%$propertySearched%' AND NUMBER_OF_BEDROOMS >= '$bedrooms' AND ADVERTISEMENT_PRICE <= '$maxPrice' AND PROPERTY_TYPE_NAME = '$propertyType'";
  }

  $stmt = sqlsrv_prepare($conn, $sql);
?>

<form class="bg-light p-2 m-0 border-bottom border-top" method="get" action="listings.php">
  <div class="row align-items-center justify-content-center pb-0">
    <div class="col-12 col-md-8 col-lg-6">
      <input class="form-control p-2" list="propertySuggestions" id="propertySearched" name="propertySearched" placeholder="Type to search...">
      <datalist id="propertySuggestions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
      </datalist>
    </div>
    <div class="col-12 col-md-8 col-lg-1 ps-0 pt-3 pb-3 d-flex align-items-center justify-content-center">
      <button class="btn btn-outline-light ps-3 pe-3 text-black border border-secondary" type="submit">
       Search
      </button>
    </div>
  </div>
  <div class="row text-center align-items-center justify-content-center mb-3">
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="radius">Search radius</label>
      <select class="form-select" id="radius" name="radius">
        <option value="0" selected>Any radius</option>
        <option value="5">5 km</option>
        <option value="10">10 km</option>
        <option value="25">25 km</option>
      </select>
    </div>
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="bedrooms">Bedrooms</label>
      <select class="form-select" id="bedrooms" name="bedrooms">
        <option value="0" selected>All</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        <option value="5">5+</option>
      </select>
    </div>
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="maxPrice">Max Price</label>
      <select class="form-select" id="maxPrice" name="maxPrice">
        <option value="10000000" selected>No max</option>
        <option value="500">500 pcm</option>
        <option value="600">600 pcm</option>
        <option value="700">700 pcm</option>
      </select>
    </div>
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="propertyType">Property type</label>
      <select class="form-select" id="propertyType" name="propertyType">
        <option value="all" selected>All types</option>
        <option value="Single">Single Family</option>
        <option value="Apartment">Apartment</option>
        <option value="Duplex">Duplex</option>
      </select>
    </div>
  </div>
</form>


<?php

  if (sqlsrv_execute($stmt) === false) {
    echo "</br> error";
  } else {
    //echo "</br> success </br>";

    $count = 0; ?>

    <div class="container p-5">

      <?php
      // Return results
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        //echo $row['ADDRESS_CITY'] . ' ' . $row['ADDRESS_STREET'] . '</br>';
        $count += 1; ?>

        <div class="d-flex align-items-center justify-content-center">
          <div class="m-2 p-3 border rounded w-75">
            <div class="row text-center align-items-center justify-content-center">
              <div class="col-12 col-md-8 col-lg-4 p-3">
                <img src="data:image;base64,<?=base64_encode($row['IMAGE_BINARY']) ?>" class="img-fluid rounded">
              </div>
              <div class="col-12 col-md-8 col-lg-4 text-start col p-3">
                <h1><?= $row['ADVERTISEMENT_PRICE'] . ' pcm'; ?></h1>
                <p><?= $row['NUMBER_OF_BEDROOMS'] . ' Beds | ' . $row['NUMBER_OF_BATHROOMS'] . ' Bath | ' . $row['SQR_FEET'] . ' sqft'; ?></p>
                <p><?= $row['ADDRESS_NUMBER'] . ' ' . $row['ADDRESS_STREET'] . ', ' . $row['ADDRESS_CITY'] . ', ' . $row['ADDRESS_STATE']; ?></p>
              </div>
              <div class="col-12 col-md-8 col-lg-4 p-3">
                <a class="btn btn-dark p-3" href="propertyInfo.php?id=<?php echo $row['ADVERTISEMENT_ID'];?>">More Info</a>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>

    <?php
    // If no result alert user
    if ($row < 1 && $count === 0) { ?>
      <div class="d-flex flex-column text-center">
        <p class="text-danger"><?= "No results were found. Please expand your search parameters."; ?></p>
      </div>

    <?php }

  }

  
//Runs when user clicks link in nav
} else { 

  ?>
  <form class="bg-light p-2 m-0 border-bottom border-top" method="get" action="listings.php">
  <div class="row align-items-center justify-content-center pb-0">
    <div class="col-12 col-md-8 col-lg-6">
      <input class="form-control p-2" list="propertySuggestions" id="propertySearched" name="propertySearched" placeholder="Type to search...">
      <datalist id="propertySuggestions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
      </datalist>
    </div>
    <div class="col-12 col-md-8 col-lg-1 ps-0 pt-3 pb-3 d-flex align-items-center justify-content-center">
      <button class="btn btn-outline-light ps-3 pe-3 text-black border border-secondary" type="submit">
       Search
      </button>
    </div>
  </div>
  <div class="row text-center align-items-center justify-content-center mb-3">
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="radius">Search radius</label>
      <select class="form-select" id="radius" name="radius">
        <option value="0" selected>Any radius</option>
        <option value="5">5 km</option>
        <option value="10">10 km</option>
        <option value="25">25 km</option>
      </select>
    </div>
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="bedrooms">Bedrooms</label>
      <select class="form-select" id="bedrooms" name="bedrooms">
        <option value="0" selected>All</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        <option value="5">5+</option>
      </select>
    </div>
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="maxPrice">Max Price</label>
      <select class="form-select" id="maxPrice" name="maxPrice">
        <option value="10000000" selected>No max</option>
        <option value="500">500 pcm</option>
        <option value="600">600 pcm</option>
        <option value="700">700 pcm</option>
      </select>
    </div>
    <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
      <label class="form-label" for="propertyType">Property type</label>
      <select class="form-select" id="propertyType" name="propertyType">
        <option value="all" selected>All types</option>
        <option value="Single">Single Family</option>
        <option value="Apartment">Apartment</option>
        <option value="Duplex">Duplex</option>
      </select>
    </div>
  </div>
</form>
<?php }

?>

<!--return example props-->
<div class="container p-5">

</div>

<?php include("includes/footer.php"); ?>
