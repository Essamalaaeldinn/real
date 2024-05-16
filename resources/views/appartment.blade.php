@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/bg.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
           
        }

    </style>
</head>

<body>
   
    </div>

    <!-- Form Start -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('add your apartment details for sale') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('property-list') }}">
                        @csrf
                         <!-- home_type Field -->
                         <div class="mb-3 row">
                            <label for="apartment_type" class="col-md-4 col-form-label text-md-end">{{ __('Apartment Type') }}</label>
                            <div class="col-md-6">
                                <input id="apartment_type" type="text" class="form-control @error('apartment_type') is-invalid @enderror" name="apartment_type" value="{{ old('apartment_type') }}" required autocomplete="apartment_type" autofocus>
                                @error('home_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <!-- phone Field -->
                         <div class="mb-3 row">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- home_space Field -->
                        <div class="mb-3 row">
                            <label for="home_space" class="col-md-4 col-form-label text-md-end">{{ __('House space') }}</label>
                            <div class="col-md-6">
                                <input id="home_space" type="number" class="form-control @error('home_space') is-invalid @enderror" name="home_space" value="{{ old('home_space') }}" required autocomplete="home_space" autofocus>
                                @error('home_space')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- floor -->
                        <div class="mb-3 row">
                            <label for="floor" class="col-md-4 col-form-label text-md-end">{{ __('Floor') }}</label>
                            <div class="col-md-6">
                                <input id="floor" type="number" class="form-control @error('floor') is-invalid @enderror" name="floor" value="{{ old('floor') }}" required autofocus>
                                @error('floor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- home_price Field -->
                        <div class="mb-3 row">
                            <label for="home_price" class="col-md-4 col-form-label text-md-end">{{ __('House price ') }}</label>
                            <div class="col-md-6">
                                <input id="home_price" type="number" class="form-control @error('home_price') is-invalid @enderror" name="home_price" value="{{ old('home_price') }}" required autocomplete="home_price">
                                @error('home_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- num_of_bathrooms -->
                        <div class="mb-3 row">
                            <label for="num_of_bathrooms" class="col-md-4 col-form-label text-md-end">{{ __('number of bathrooms') }}</label>
                            <div class="col-md-6">
                                <input id="num_of_bathrooms" type="number" class="form-control @error('num_of_bathrooms') is-invalid @enderror" name="num_of_bathrooms" required autocomplete="new-num_of_bathrooms">
                                @error('num_of_bathrooms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-3 row">
                            <label for="num_of_bedrooms" class="col-md-4 col-form-label text-md-end">{{ __('number of bedrooms') }}</label>
                            <div class="col-md-6">
                                <input id="num_of_bedrooms" type="number" class="form-control" name="num_of_bedrooms" required autocomplete="num_of_bedrooms">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" required autocomplete="location">
                            </div>
                        </div>

                        <!-- Register Button -->
                        <div class="mb-0 row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Form End -->

  
</body>
</html>
@endsection