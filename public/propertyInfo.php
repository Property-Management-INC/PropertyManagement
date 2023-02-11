<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<!--
<div class="mainContent">
  <div id="infoContainer">
    <div class="infoCard">
      <div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/images/img2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/images/img3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="text-start">
        <h2>48 Roebuck Road, Crookesmoor, Sheffield</h2>
        <p>390 pcm</p>
      </div>
    </div>
    <div class="infoCard">
      <h1>Unit Features</h1>
      <h5 class="bg-dark text-light p-2 rounded">Appliances</h5>
      <div class="features">
        <p>Dishwasher</p>
        <p>Dryer</p>
        <p>Freezer</p>
        <p>Washer</p>
        <p>Oven</p>
        <p>Refrigerator</p>
      </div>
      <h5 class="bg-dark text-light p-2 rounded">Heating & Cooling</h5>
      <div class="features">
        <p>Air</p>
        <p>Central</p>
        <p>Conditioning</p>
        <p>Heating</p>
        <p>Ceiling Fan</p>
      </div>
      <h5 class="bg-dark text-light p-2 rounded">Flooring</h5>
      <div class="features">
        <p>Concrete</p>
        <p>Hardwood</p>
        <p>Vinyl</p>
      </div>
    </div>
    <div class="infoCard">
      <h1>Property Description</h1>
      <div class="propertyStats">
        <div class="statsCard">
          <h5>3</h5>
          <h5>Bedrooms</h5>
        </div>
        <div class="statsCard">
          <h5>3</h5>
          <h5>Total Baths</h5>
        </div>
        <div class="statsCard">
          <h5>3,400</h5>
          <h5>Square Feet</h5>
        </div>
        <div class="statsCard">
          <h5>5</h5>
          <h5>Acres</h5>
        </div>
        <div class="statsCard">
          <h5>14</h5>
          <h5>Days Listed</h5>
        </div>
      </div>
      <div class="propertyDescription">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nobis praesentium iste repudiandae molestiae! Maiores consequatur maxime, tenetur eius animi sequi impedit dignissimos voluptatibus eos quo quis accusantium, optio dolore!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nobis praesentium iste repudiandae molestiae! Maiores consequatur maxime, tenetur eius animi sequi impedit dignissimos voluptatibus eos quo quis accusantium, optio dolore!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nobis praesentium iste repudiandae molestiae! Maiores consequatur maxime, tenetur eius animi sequi impedit dignissimos voluptatibus eos quo quis accusantium, optio dolore!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nobis praesentium iste repudiandae molestiae! Maiores consequatur maxime, tenetur eius animi sequi impedit dignissimos voluptatibus eos quo quis accusantium, optio dolore!</p>
      </div>
    </div>
    <div class="infoCard">
      <h1>Request Information</h1>
      <form action="feedBackMessages/submit.php">
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
  <div class="infoCard mt-3">
    <h1>Google Maps API</h1>
  </div>
</div>--->

<div class="container p-5">
  <div class="row justify-content-center p-4">
    <div class="col-12 col-md-12 col-lg-7 card m-2 p-3">

      <div id="carousel" class="carousel slide carousel-fade">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/img1.jpg" class="d-block w-100 rounded" alt="...">
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
        <h2>48 Roebuck Road, Crookesmoor, Sheffield</h2>
        <p>390 pcm</p>

      </div>


      <div class="border-top w-100 p-3"></div>

  
      <h1 class="text-center">Property Information</h1>
      <div class="row justify-content-center text-center">
        <div class="col-12 col-md-12 col-lg-3 p-2">
          <h5>3</h5>
          <h5>Bedrooms</h5>
        </div>
        <div class="col-12 col-md-12 col-lg-3 p-2">
          <h5>3</h5>
          <h5>Total Baths</h5>
        </div>
        <div class="col-12 col-md-12 col-lg-3 p-2">
          <h5>3,400</h5>
          <h5>Square Feet</h5>
        </div>
        <div class="col-12 col-md-12 col-lg-3 p-2">
          <h5>5</h5>
          <h5>Acres</h5>
        </div>


      </div>

      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, facere tempora? Explicabo facilis maiores consectetur excepturi earum veritatis aliquid dolorum nemo id sit, porro, ullam tempore, provident quidem reiciendis non.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, facere tempora? Explicabo facilis maiores consectetur excepturi earum veritatis aliquid dolorum nemo id sit, porro, ullam tempore, provident quidem reiciendis non.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, facere tempora? Explicabo facilis maiores consectetur excepturi earum veritatis aliquid dolorum nemo id sit, porro, ullam tempore, provident quidem reiciendis non.</p>



    </div>


    <div class="col-12 col-md-12 col-lg-4 card m-2 p-3 text-center">
      <h1>Unit Features</h1>

      <h5 class="bg-dark text-light p-2 rounded">Appliances</h5>

      <div class="row text-center justify-content-center align-items-center p-2">
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Freezer
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Dishwasher
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Dryer
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Freezer
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Washer
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Oven
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Refrigerator
        </div>

      </div>

      <h5 class="bg-dark text-light p-2 rounded">Heating & Cooling</h5>

      <div class="row text-center justify-content-center align-items-center p-2">
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Air
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Central
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Conditioning
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Heating
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Ceiling Fan
        </div>
      </div>

      <h5 class="bg-dark text-light p-2 rounded">Flooring</h5>

      <div class="row text-center justify-content-center align-items-center p-2">
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Concrete
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Hardwood
        </div>
        <div class="col-12 col-md-5 col-lg-5 border border-dark rounded p-2 m-2">
          Vinyl
        </div>
      </div>

    </div>
    

  </div>

  <div class="row justify-content-center p-3">

    <div class="col-12 col-md-12 col-lg-11 card m-2 p-3 text-center">

      <h1>Google Maps API</h1>

    </div>

  

    <div class="col-12 col-md-12 col-lg-11 card m-2 p-3">
      <h1>Request Information</h1>
      <form action="feedBackMessages/submit.php">
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



</div>

<?php include("includes/footer.php"); ?>