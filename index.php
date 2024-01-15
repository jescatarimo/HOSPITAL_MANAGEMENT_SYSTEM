<?php
    include("include/header.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>HMS Home Page</title>
    </head>

    <body>
        <!-- SLIDER START HERE -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slider-bg-1.png" class="d-block w-100 corousel-image-size" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>JECWILLY HOSPITAL</h1>
          <!-- <p>One Of The Preffered Restaurant In Tanzania.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slider-bg-2.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>JECWILLY HOSPITA</h1>
          <!-- <p>One Of The Preffered Restaurant In Tanzania.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slider-bg-3.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>JECWILLY HOSPITA</h1>
          <!-- <p>One Of The Preffered Restaurant In Tanzania.</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- SLIDER END HERE> -->

  <div class="container-fluid">
    <div class="col-md-12 mt-5 p-3">
      <div class="row">
        <div class="col-md-3 ml-5 p-3 mx-1 shadow bg-light">
          <img src="images/more-info.jpg" width="300px">
          <h5 class="text-center">Click for more information</h5>

          <center>
            <a href="#">
              <button class="btn btn-primary my-3 ml-5">More Info</button>
            </a>
          </center>
        </div>

        <div class="col-md-4 mx-1 p-3 shadow bg-light ">
          <img class="text-align-center" src="images/patient.avif" width="370px">

          <h5 class="text-center">Create Account for patient</h5>

          <center>
            <a href="#">
              <button class="btn btn-primary my-3 ml-5">Sign Up</button>
            </a>
          </center>
        </div>

        <div class="col-md-4 mx-1 p-3 shadow bg-light">
        <img src="images/doctors.jpg" width="370px">

          <h5 class="text-center">We are employing for doctors</h5>

          <center>
            <a href="#">
              <button class="btn btn-primary my-3 ml-5">Apply Now!!</button>
            </a>
          </center>

        </div>

      </div>
    </div>
  </div>
    </body>
</html>