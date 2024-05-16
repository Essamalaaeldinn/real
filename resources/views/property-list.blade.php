@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  

  <body>
  
      

      <!-- Header Start -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Property List</h1>
            <nav aria-label="breadcrumb animated fadeIn">
              <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                  class="breadcrumb-item text-body active"
                  aria-current="page"
                >
                  Property List
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

  

      <!-- Property List Start -->
      <div class="container py-5">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="mb-3">Property Listing</h1>
    </div>

         <!-- Property List Start -->
<div class="container py-5">
  <div class="row">
    @foreach ($appartments as $appartment)
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">{{ $appartment->apartment_type }}</h5>
          <ul class="list-unstyled">
            <li><strong>Apartment Type:</strong> {{ $appartment->apartment_type}}</li>
            <li><strong>Phone:</strong> {{ $appartment->phone }}</li>
            <li><strong>Home Space:</strong> {{ $appartment->home_space }}</li>
            <li><strong>Floor:</strong> {{ $appartment->floor }}</li>
            <li><strong>Home Price:</strong> {{ $appartment->home_price }}</li>
            <li><strong>Number of Bathrooms:</strong> {{ $appartment->num_of_bathrooms }}</li>
            <li><strong>Number of Bedrooms:</strong> {{ $appartment->num_of_bedrooms }}</li>
            <li><strong>Location:</strong> {{ $appartment->location }}</li>
          </ul>
        </div>
        <div class="card-footer bg-transparent border-0">
          <form action="{{ route('appartment.destroy', $appartment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

  <!-- Property List End -->

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </div>
  </body>
</html>
@endsection