@extends('layouts.site')
@section('content')

 <!-- Navbar & Hero Start -->
 <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('index') }}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                <a href="{{ route('menu') }}" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('booking') }}" class="dropdown-item">Booking</a>
                        <a href="{{ route('team') }}" class="dropdown-item active">Our Team</a>
                        <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

@include('sections.team')

@endsection
