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

<div class="mainContent">
  <div class="d-flex align-items-center justify-content-center">

    <form class="row g-3 border w-50 text-start p-3 rounded mt-2" action="submit.php">
      <div class="text-center border-bottom">
        <h1>Advertise Your Property</h1>
        <p>Advertisements are processed within 48 hours.</p>
        <p>If any changes are required you will be notified via email.</p>
      </div>

      <label class="col-form-label col-12 pt-0">Would you like to sell or lease your property?</label>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="propertyStatus" id="sell" value="option1" checked>
          <label class="form-check-label" for="sell">
            Sell
          </label>
      </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="propertyStatus" id="lease" value="option2">
          <label class="form-check-label" for="lease">
            Lease
          </label>
      </div>

      <div class="col-12">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
      </div>
  
      <div class="col-5">
          <label class="form-label" for="propertyType">Type of Property</label>
          <select class="form-select" id="propertyType" name="propertyType">
            <option selected>Choose...</option>
            <option value="1">Single Family</option>
            <option value="2">Apartment</option>
            <option value="3">Duplex</option>
            <option value="4">Other</option>
          </select>
      </div>

      <div class="col-12">
          <label for="price" class="form-label">Estimated Price</label>
          <input type="number" class="form-control" id="price" name="price" placeholder="$300,000" min="300" max="500000">
      </div>

      <div class="col-12">
          <label for="bedroomCount" class="form-label">Number of Bedrooms</label>
          <input type="number" class="form-control" id="bedroomCount" name="bedroomCount" placeholder="2" min="1" max="20">
      </div>

      <div class="col-12">
          <label for="bathroomCount" class="form-label">Number of Bathrooms</label>
          <input type="number" class="form-control" id="bathroomCount" name="bathroomCount" placeholder="3" min="1" max="20">
      </div>

      <div class="row p-3">
          <label class="col-form-label col-12 pt-0 text-bg-dark text-center rounded">Amenities</label>
          <label class="col-form-label col-12 pt-0">Appliances</label>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="dishwasher" name="dishwasher">
                <label class="form-check-label" for="dishwasher">
                  Dishwasher
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="dryer" name="dryer">
                <label class="form-check-label" for="dryer">
                  Dryer
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="freezer" name="freezer">
                <label class="form-check-label" for="freezer">
                  Freezer
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="washer" name="washer">
                <label class="form-check-label" for="washer">
                  Washer
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="oven" name="oven">
                <label class="form-check-label" for="oven">
                  Oven
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="refrigerator" name="refrigerator">
                <label class="form-check-label" for="refrigerator">
                  Refrigerator
                </label>
              </div>
          </div>
      </div>
      
      <div class="row p-3">
          <label class="col-form-label col-12 pt-0">Heating & Cooling</label>
          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ac" name="ac">
                <label class="form-check-label" for="ac">
                  Air Conditioning
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="heating" name="heating">
                <label class="form-check-label" for="heating">
                  Heating
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="fan" name="fan">
                <label class="form-check-label" for="fan">
                  Ceiling Fan
                </label>
              </div>
          </div>
      </div>

      <div class="row p-3">
          <label class="col-form-label col-12 pt-0">Flooring</label>
          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="concrete" name="concrete">
                <label class="form-check-label" for="concrete">
                  Concrete
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hardwood" name="hardwood">
                <label class="form-check-label" for="hardwood">
                  Hardwood
                </label>
              </div>
          </div>

          <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="vinyl" name="vinyl">
                <label class="form-check-label" for="vinyl">
                  Vinyl
                </label>
              </div>
          </div>
      </div>

      <div class="col-12">
          <label for="sqFeet" class="form-label">Square Feet</label>
          <input type="number" class="form-control" id="sqFeet" name="sqFeet" placeholder="2,500" min="1" max="9999999">
      </div>


      <div class="col-12">
          <label for="propertyImg" class="form-label">Upload Image of Property</label>
          <input type="file" class="form-control" id="propertyImg" name="propertyImg">
      </div>

      <div class="col-12">
          <label for="ownershipDoc" class="form-label">Upload Proof of Ownership (PDF/Image)</label>
          <input type="file" class="form-control" id="ownershipDoc" name="ownershipDoc">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-dark">Submit</button>
      </div>
  </form>
  </div>
</div>

<?php include("includes/footer.php"); ?>