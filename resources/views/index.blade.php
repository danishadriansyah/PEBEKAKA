<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <style>
      .navbar {
        background-color: #ff5722;
      }
      .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        color: white;
        display: flex;
        align-items: center;
      }
      .navbar-brand img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
      }
      .nav-link {
        color: white !important;
      }
      .carousel-item img {
        width: 100%;
        height: 400px;
        object-fit: cover;
      }
      .product-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
      }
      .product-item {
        flex: 1 1 calc(33.333% - 15px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 10px;
        background-color: white;
      }
      .product-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
      .product-item p {
        margin: 10px 0 0;
        font-size: 16px;
        font-weight: bold;
      }
      footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
      }
      .search-bar {
        flex-grow: 1;
      }
      .search-bar input {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid m-0 p-0">
      <!----------Navbar----------> 
      <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/dex') }}">
            <img src="{{ asset('gambar/logo.png') }}" alt="Logo">
            E-commerce
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">Kategori</a>
              </li>
              <form class="d-flex search-bar">
                <input class="form-control me-2" type="search" placeholder="Cari apa sih..." aria-label="Search" />
                <button class="btn btn-danger" type="submit">Search</button>
              </form>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Ker">Keranjang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--------------Carousel----------------------->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#news1"><img src="{{ asset('gambar/carousel1.jpg') }}" class="d-block w-100" /></a>
          </div>
          <div class="carousel-item">
            <a href="#news2"><img src="{{ asset('gambar/carousel2.png') }}" class="d-block w-100" /></a>
          </div>
          <div class="carousel-item">
            <a href="#news3"><img src="{{ asset('gambar/carousel3.png') }}" class="d-block w-100" /></a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!---------------------------Popular Deals---------------------------->
      <div class="container mt-5">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>TOP SELLING ITEMS</b></p>
        <hr class="ms-2">
        <div class="product-grid">
          <div class="product-item">
            <a href="#berita1"><img src="{{ asset('gambar/1730941325_botol.jpg') }}" class="img-fluid mb-2" /></a>
            <a href="#berita1" class="judul">
              <p>Botol Minum</p>
            </a>
          </div>
          <div class="product-item">
            <a href="#berita2"><img src="{{ asset('gambar/buku (2).png') }}" class="img-fluid mb-2" /></a>
            <a href="#berita2" class="judul">
              <p>Buku</p>
            </a>
          </div>
          <div class="product-item">
            <a href="#berita3"><img src="{{ asset('gambar/dapur.png') }}" class="img-fluid mb-2" /></a>
            <a href="#berita3" class="judul">
              <p>Dapur</p>
            </a>
          </div>
          <div class="product-item">
            <a href="#berita4"><img src="{{ asset('gambar/fashion.png') }}" class="img-fluid mb-2" /></a>
            <a href="#berita4" class="judul">
              <p>Fashion</p>
            </a>
          </div>
          <div class="product-item">
            <a href="#berita5"><img src="{{ asset('gambar/elektronik.png') }}" class="img-fluid mb-2" /></a>
            <a href="#berita5" class="judul">
              <p>Elektronik</p>
            </a>
          </div>
          <div class="product-item">
            <a href="#berita6"><img src="{{ asset('gambar/kesehatan.png') }}" class="img-fluid mb-2" /></a>
            <a href="#berita6" class="judul">
              <p>Kesehatan</p>
            </a>
          </div>
        </div>
      </div>
      <footer>
        <p><b>PeBeKaKA</b></p>
        <p><b>Copyright Kelompok ADF</b></p>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>