<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>Home-RealEstate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  
    <link href="css/style.css" rel="stylesheet" />
   
</head>
<body>

      <!-- Navbar Start -->

      <div class="container-xxl bg-white p-0">
        
         <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="home"
            class="navbar-brand d-flex align-items-center text-center"
          >
        
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="img/icon-deal.png"
                alt="Icon"
                style="width: 30px; height: 30px"
              />
            </div>
            <h1 class="m-0 text-primary">Real-Estate</h1>
          </a>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="home" class="nav-item nav-link  ">Home</a>
              
              <a href="about" class="nav-item nav-link ">About</a>
              <a href="property-list" class="nav-item nav-link ">Property List</a>
              <a href="contact" class="nav-item nav-link">Contact</a>
              
            </div>

            <a href="add" class="btn btn-primary px-3 d-none d-lg-flex"
              >Add Property</a
            >

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
          </div>
        </nav>
      </div>
      <!-- Navbar End -->
    
      

        <main class="py-4">
            @yield('content')
        </main>


         <!-- Bootstrap JS (optional, for some functionalities) -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Get In Touch</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>Saqr , Maadi,
                Egypt
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+012 835 50875
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@example.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Quick Links</h5>
              <a class="btn btn-link text-white-50" href="about">About Us</a>
              <a class="btn btn-link text-white-50" href="contact">Contact Us</a>
              <a class="btn btn-link text-white-50" href="about">Our Services</a>
              <a class="btn btn-link text-white-50" href="about">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href="about"
                >Terms & Condition</a
              >
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Photo Gallery</h5>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-1.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-2.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-3.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-4.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-5.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-6.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
           
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>
</body>
</html>
