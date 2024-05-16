@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
   
  </head>

  <body>
    

      <!-- Header Start -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated fadeIn">
              <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                  class="breadcrumb-item text-body active"
                  aria-current="page"
                >
                  About
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/header.jpg" alt="" />
          </div>
        </div>
      </div>
      <!-- Header End -->

     

      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="about-img position-relative overflow-hidden p-5 pe-0">
                <img class="img-fluid w-100" src="img/about.jpg" />
              </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
              <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
              <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Tempor erat elitr
                rebum at clita
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Aliqu diam amet
                diam et eos
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Clita duo justo
                magna dolore erat amet
              </p>
              <a class="btn btn-primary py-3 px-5 mt-3" href="property-list">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Call to Action Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="bg-light rounded p-3">
            <div
              class="bg-white rounded p-4"
              style="border: 1px dashed rgba(0, 185, 142, 0.3)"
            >
              <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <img
                    class="img-fluid rounded w-100"
                    src="img/call-to-action.jpg"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="mb-4">
                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                    <p>
                      Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem
                      kasd vero ipsum sit sit diam justo sed vero dolor duo.
                    </p>
                  </div>
                  <a href="" class="btn btn-primary py-3 px-4 me-2"
                    ><i class="fa fa-phone-alt me-2"></i>Make A Call</a
                  >
                  <a href="" class="btn btn-dark py-3 px-4"
                    ><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Call to Action End -->

     <!-- Team Start -->
     <div class="container-xxl py-5">
        <div class="container ">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3">Property Agents</h1>
            <p>
            Meet our Property Agents, the navigators of your real estate journey. With expertise as their compass and dedication as their fuel, they guide you through the maze of listings, helping you find your perfect home sweet home. From dreamy abodes to lucrative investments, they're your trusted allies, making every step of the process smooth sailing. Let our Property Agents be the wind beneath your wings as you soar towards your property dreams.</p>
          </div>


          <div class="row g-5">
            <div class="col-lg-3 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item rounded overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/essam.jpg"    alt="" />
                  <div
                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">Essam Alaa Eldin</h5>
                  <p>Team leader</p>
                </div>
              </div>
            </div>




            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item rounded overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/omar.jpg" alt="" />
                  <div
                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">Omar Osama</h5>
                  <p>Front-end developer</p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item rounded overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/mohamed.jpg" alt="" />
                  <div
                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">Mohamed Firas</h5>
                  <p> UI/UX designer </p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-8 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item rounded overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/khaled.jpg"  alt="" />
                  <div
                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">khaled Elbamby</h5>
                  <p> Back-end engineer</p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item rounded overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/ziad.jpg" alt="" />
                  <div
                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">Ziad Tamer</h5>
                  <p>FullStack developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

 
    </div>
  </body>
</html>
@endsection