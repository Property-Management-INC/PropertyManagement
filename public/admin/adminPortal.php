<?php
// Lines 0-110 written by William Hilton
// The admin portal enables the system administrator to view, approve, and reject advertisement requests from sellers.

include("../includes/config.php");
include("../includes/header.php");
include("../includes/nav.php");
?>

<div class="mainContent">
  <h1>Advertisement Requests</h1>
  <div class="p-3 m-5 border text-start">
    <h5 class="border p-2">Request ID: 1932</h5>
    <h5 class="border p-2">Property is for: Lease</h5>
    <h5 class="border p-2">Address: 2832 Country Lane</h5>
    <h5 class="border p-2">Type of Property: Single Family</h5>
    <h5 class="border p-2">Estimated Price: $300,000</h5>
    <h5 class="border p-2">Number of Bedrooms: 2</h5>
    <h5 class="border p-2">Number of Bathrooms: 3</h5>
    <h5 class="border p-2">Amenities: Dishwasher, Dryer</h5>
    <h5 class="border p-2">Square Feet: 2,500</h5>
    <div class="border p-2">
        <h5>Property Images:</h5>
        <img src="../images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="../images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
      </div>
    <div class="border p-2 mt-2">
        <h5>Proof of Ownership:</h5>
        <object data="../images/ownership123.pdf" type="application/pdf" width="100%" height="800px"></object>
    </div>
    <div class="border p-2 mt-2">
      <form action="">
        <h5>Accept/Reject Advertisement</h5>
        <div class="form-floating mb-2">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Comments</label>
        </div>
        <div class="form-check pb-2">
          <input class="form-check-input" type="radio" name="advertisementStatus" id="accept" checked>
          <label class="form-check-label" for="accept">
            Accept
          </label>
        </div>
        <div class="form-check pb-2">
          <input class="form-check-input" type="radio" name="advertisementStatus" id="reject">
          <label class="form-check-label" for="reject">
            Reject
          </label>
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
      </form>
    </div>
  </div>
  <div class="p-3 m-5 border text-start">
    <h5 class="border p-2">Request ID: 1932</h5>
    <h5 class="border p-2">Property is for: Lease</h5>
    <h5 class="border p-2">Address: 2832 Country Lane</h5>
    <h5 class="border p-2">Type of Property: Single Family</h5>
    <h5 class="border p-2">Estimated Price: $300,000</h5>
    <h5 class="border p-2">Number of Bedrooms: 2</h5>
    <h5 class="border p-2">Number of Bathrooms: 3</h5>
    <h5 class="border p-2">Amenities: Dishwasher, Dryer</h5>
    <h5 class="border p-2">Square Feet: 2,500</h5>
    <div class="border p-2">
        <h5>Property Images:</h5>
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
        <img src="images/artur-tumasjan-p_cHW1REBWc-unsplash.jpg" width="200px">
    </div>
    <div class="border p-2 mt-2">
        <h5>Proof of Ownership:</h5>
        <object data="../images/ownership123.pdf" type="application/pdf" width="100%" height="800px"></object>
    </div>
    <div class="border p-2 mt-2">
      <form action="">
        <h5>Accept/Reject Advertisement</h5>
        <div class="form-floating mb-2">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Comments</label>
        </div>
        <div class="form-check pb-2">
          <input class="form-check-input" type="radio" name="advertisementStatus" id="accept" checked>
          <label class="form-check-label" for="accept">
            Accept
          </label>
        </div>
        <div class="form-check pb-2">
          <input class="form-check-input" type="radio" name="advertisementStatus" id="reject">
          <label class="form-check-label" for="reject">
            Reject
          </label>
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include("../includes/footer.php"); ?>