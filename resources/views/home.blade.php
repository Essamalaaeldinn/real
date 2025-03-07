@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <body>
  
      <!-- Header Start -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">
              Find A <span class="text-primary">Perfect Home</span> To Live With
              Your Family
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
            Welcome to our premier real estate platform, where your dream property awaits. Whether you're searching for your perfect home, a lucrative investment opportunity, or a commercial space to grow your business, our comprehensive listings and expert agents are here to guide you every step of the way. With a diverse portfolio of properties spanning urban hubs, serene suburbs, and picturesque countryside, we cater to every lifestyle and preference. Explore our user-friendly interface to discover exclusive listings, detailed property insights, and valuable resources to make informed decisions. At our real estate hub, we're dedicated to turning your vision of home into a reality</p>
            <a href="add" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
              >Get Started</a
            >
          </div>
          <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
              </div>
              <div class="owl-carousel-item">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->

  

      <!-- Search Start -->
      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      >
        <div class="container">
          <div class="row g-2">
            <div class="col-md-10">
              <div class="row g-2">
                <div class="col-md-4">
                  <input
                    type="text"
                    class="form-control border-0 py-3"
                    placeholder="Search Keyword"
                  />
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Property Type</option>
                    <option value="1">Property Type 1</option>
                    <option value="2">Property Type 2</option>
                    <option value="3">Property Type 3</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Search End -->

     
      


      <!-- Category Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3">Property Types</h1>
            <p>
            Find your ideal property type with us. From urban apartments to suburban homes, we offer a diverse selection tailored to your lifestyle. Explore single-family homes, condos, townhouses, and luxury estates, each designed for comfort and style. Let us help you discover the perfect fit for your dream home
            </p>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-apartment.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Apartment</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-villa.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Villa</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-house.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Home</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-housing.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Office</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-building.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Building</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-neighborhood.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Townhouse</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="property-list"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-condominium.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Shop</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href="appartment"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="img/icon-luxury.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Garage</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  

     
      <!-- Back to Top -->
      
    </div>
  </body>
</html>
@endsection