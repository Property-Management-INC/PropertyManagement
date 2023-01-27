<?php include("includes/config.php");?>

<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div id="imgContainer">
  <div id="imgContent">
        <h1 class="fw-bold">Search for Houses</h1>
        <h5 class="p-3">The house you want is out there and we'll help you find it</h5>
        <form class="bg-black p-2 rounded" action="">
          <div class="row align-items-center justify-content-center pb-5">
            <div class="col-12 col-md-8 col-lg-6">
              <input class="form-control p-3" list="propertySuggestions" id="propertySearched" name="propertySearched" placeholder="Type to search...">
              <datalist id="propertySuggestions">
                <option value="San Francisco">
                <option value="New York">
                <option value="Seattle">
                <option value="Los Angeles">
                <option value="Chicago">
              </datalist>
            </div>
            <div class="col-12 col-md-8 col-lg-1 pt-3 pb-3">
              <button class="btn btn-outline-light ps-3 pe-3" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              Search
              </button>
            </div>
          </div>
          <div class="row text-center align-items-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
              <label class="form-label" for="radius">Search radius</label>
              <select class="form-select" id="radius" name="radius">
                <option selected>Any radius</option>
                <option value="1">5 km</option>
                <option value="2">10 km</option>
                <option value="3">25 km</option>
              </select>
            </div>
            <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
              <label class="form-label" for="bedrooms">Bedrooms</label>
              <select class="form-select" id="bedrooms" name="bedrooms">
                <option selected>All</option>
                <option value="1">1+</option>
                <option value="1">2+</option>
                <option value="2">3+</option>
                <option value="3">4+</option>
                <option value="3">5+</option>
              </select>
            </div>
            <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
              <label class="form-label" for="maxPrice">Max Price</label>
              <select class="form-select" id="maxPrice" name="maxPrice">
                <option selected>No max</option>
                <option value="1">500 pcm</option>
                <option value="2">600 pcm</option>
                <option value="3">700 pcm</option>
              </select>
            </div>
            <div class="col-12 col-md-8 col-lg-3 pt-3 pb-3">
              <label class="form-label" for="propertyType">Property type</label>
              <select class="form-select" id="propertyType" name="propertyType">
                <option selected>All types</option>
                <option value="1">Single Family</option>
                <option value="2">Apartment</option>
                <option value="3">Duplex</option>
              </select>
            </div>
          </div>
        </form>
    </div>
</div>

<div class="mainContent">
    <h1>How does this work?</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, esse delectus voluptas odit voluptates doloribus itaque reiciendis. Odio, perspiciatis? Dolor vero nisi eum consequuntur, asperiores itaque corrupti enim facere! Qui.
    </p>
    <div id="roleInfo">
        <div class="card">
            <h1>Homeseekers</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique itaque ex incidunt? Vel eveniet, qui, ut repellendus aliquid eligendi culpa officiis iste voluptatum, dignissimos consequatur possimus odit iusto exercitationem!</p>
        </div>
        <div class="card">
            <h1>Landlords</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique itaque ex incidunt? Vel eveniet, qui, ut repellendus aliquid eligendi culpa officiis iste voluptatum, dignissimos consequatur possimus odit iusto exercitationem!</p>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
    