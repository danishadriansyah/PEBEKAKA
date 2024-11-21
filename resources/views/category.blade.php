<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
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
            <a class="nav-link" href="{{ url('category') }}">Kategori</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link" href="#Ker">Keranjang</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link" href="{{ url('login') }}">Login</a> 
          </li>
          <!-- Tautan ke halaman CRUD -->
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('users.index') }}">Users</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('products.index') }}">Products</a> 
          </li>
        </ul> 
        <form class="d-flex"> 
            <input class="form-control me-2" type="search" placeholder="Cari apa sih..." aria-label="Search" style="width: 300px;" /> 
            <button class="btn btn-danger" type="submit">Search</button> 
        </form>
      </div> 
    </div> 
  </nav> 
</div>
      <!--------------Category Section----------------------->
<div class="container mt-5">
  <h1 class="text-center">Categories</h1>
  <div class="row">
    @foreach($categories as $category)
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="{{ asset($category['image']) }}" class="card-img-top" alt="{{ $category['name'] }}">
        <div class="card-body">
          <h5 class="card-title">{{ $category['name'] }}</h5>
          <a href="#" class="btn btn-primary">View Products</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<footer class="mt-5">
  <p style="color: rgb(255, 255, 255)"><b>PeBeKaKA</b></p>
  <p style="color: rgb(255, 255, 255)"><b>Copyright Kelompok ADF</b></p >
</footer>    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>