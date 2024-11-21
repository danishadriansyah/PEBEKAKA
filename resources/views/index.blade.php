<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('app.css') }}">
  </head>
  <body>
    <div class="container-fluid m-0 p-0">
      <img src="{{ asset('gambar/logo.png') }}" class="mx-auto d-block" style="width: 600px; height: 150px" />
      <!----------Navbar----------> 
<div> 
  <nav class="navbar sticky-top navbar-expand-lg ps-4" style="background-color: rgb(10, 38, 14); font-family: 'Oswald', sans-serif"> 
    <div class="container-fluid"> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
          <li class="nav-item"> 
            <a class="nav-link" aria-current="page" href="{{ url('/dex') }}">Home</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('category.index') }}">Kategori</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link" href="#Ker">Keranjang</a> 
          </li> 
          <!-- Tautan ke halaman CRUD -->
          </li>          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('register') }}">Register</a> 
          </li> 
          <li class="nav-item">   
            <a class="nav-link" href="{{ route('dashboard') }}">Login</a> 
        </ul> 
        <form class="d-flex"> 
            <input class="form-control me-2" type="search" placeholder="Cari apa sih..." aria-label="Search" style="width: 300px;" /> 
            <button class="btn btn-danger" type="submit">Search</button> 
        </form>
      </div> 
    </div> 
  </nav> 
</div>
      <!--------------Berita Utama----------------------->
<div class="container-fluid ms-5 me-5 pe-4" style="margin-top: 2%;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-4"><b>Discover golf course in your area</b></p> -->
      <!-- <hr /> -->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#news1"><img src="{{ asset('gambar/carousel1.jpg') }}" style="width: 100%; height: 500px" /></a>
          </div>
          <div class="carousel-item">
            <a href="#news2"><img src="{{ asset('gambar/carousel2.png') }}" style="width: 100%; height: 500px" /></a>
          </div>
          <div class="carousel-item">
            <a href="#news3"><img src="{{ asset('gambar/carousel3.png') }}" style="width: 100%; height: 500px" /></a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel ExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
  <!---------------------------Popular Deals---------------------------->
  <div class="row pe-5">
  <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>TOP SELLING ITEMS</b></p>
  <hr  class="ms-2">
  <div class="col-4">
    <a href="#berita1"><img src="{{ asset('gambar/1730941325_botol.jpg') }}" class="img-fluid mb-2" /></a>
    <a href="#berita1" class="judul">
      <p><b>Botol Minum</b></p>
    </a>
  </div>
  <div class="col-4">
    <a href="#berita2"><img src="{{ asset('gambar/buku (2).png') }}" class="img-fluid mb-2" /></a>
    <a href="#berita2" class="judul">
      <p><b>Buku</b></p>
    </a>
  </div>
  <div class="col-4">
    <a href="#berita3"><img src="{{ asset('gambar/dapur.png') }}" class="img-fluid mb-2" /></a>
    <a href="#berita3" class="judul">
      <p><b>Dapur</b></p>
    </a>
  </div>
</div>
<div class="row pe-5 mt-5">
  <div class="col-4">
    <a href="#berita4"><img src="{{ asset('gambar/fashion.png') }}" class="img-fluid mb-2" /></a>
    <a href="#berita4" class="judul">
      <p><b>Fashion</b></p>
    </a>
  </div>
  <div class="col-4">
    <a href="#berita5"><img src="{{ asset('gambar/elektronik.png') }}" class="img-fluid mb-2" /></a>
    <a href="#berita5" class="judul">
      <p><b>Elektronik</b></p>
    </a>
  </div>
  <div class="col-4">
    <a href="#berita6"><img src="{{ asset('gambar/kesehatan.png') }}" class="img-fluid mb-2" /></a>
    <a href="#berita6" class="judul">
      <p><b>Kesehatan</b></p>
    </a>
  </div>
</div>
<footer>
  <p style="color: rgb(255, 255, 255)"><b>PeBeKaKA</b></p>
  <p style="color: rgb(255, 255, 255)"><b>Copyright Kelompok ADF</b></p >
</footer>    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>