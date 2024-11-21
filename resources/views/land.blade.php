<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="device-width, initial-scale = 1.0" />
    <title>GOLF.ID</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css" />
  </head>
  <body>
    <div class="container-fluid m-0 p-0">
      <img src="logo.png" class="mx-auto d-block" style="width: 600px; height: 150px" />

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
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Courses">Golf Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Equipment">Price Comparison</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Pro">Promotion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Shop">Toko terdekat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#News">Login</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search Golf Course" aria-label="Search" />
                <button class="btn btn-danger" type="submit">Search</button>
              </form>
            </div>  
          </div>
        </nav>
      </div>

      <!--------------Berita Utama----------------------->
      <div class="container-fluid ms-5 me-5 pe-4">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-4"><b>Discover golf course in your area</b></p>
        <hr />
        <div class="row mb-3">
          <div class="col">
            <a href="#news1"><img src="resources/gambar/BDG.jpg" style="width: 700px; height: 500px" /></a>
          </div>
          <div class="col me-5">
            <p style="font-size: 42px; font-family: 'Oswald', sans-serif"><b>Bukit Darmo Golf Club</b></p>
            <figcaption class="blockquote-footer">Surabaya, Jawa Timur</figcaption>
          </div>
        </div>
        <!---------------------------Popular Deals---------------------------->
        <div class="row pe-5">
          <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>Popular Deals</b></p>
          <hr  class="ms-2">
          <div class="col-4">
            <a href="#berita1"><img src="royale.jpg" class="img-fluid mb-2" /></a>
            <a href="#berita1" class="judul">
              <p><b>Royale Jakarta Golf Club</b></p>
            </a>
          </div>
          <div class="col-4">
            <a href="#berita2"><img src="sentul.jpg" class="img-fluid mb-2" /></a>
            <a href="#berita2" class="judul">
              <p><b>Sentuh Highland Golf Club</b></p>
            </a>
          </div>
          <div class="col-4">
            <a href="#berita3"><img src="newkuta.jpg" class="img-fluid mb-2" /></a>
            <a href="#berita3" class="judul">
              <p><b>New Kuta Golf Bali</b></p>
            </a>
          </div>
        </div>
        <div class="row pe-5">
          <div class="col-4">
            <a href="#berita4"><img src="emeralda.jpg" class="img-fluid mb-2" /></a>
            <a href="#berita4" class="judul">
              <p><b>Emeralda Golf</b></p>
            </a>
          </div>
          <div class="col-4">
            <a href="#berita5"><img src="senayan.jpg" class="img-fluid mb-2" /></a>
            <a href="#berita5" class="judul">
              <p><b>Senayan Golf Club</b></p>
            </a>
          </div>
          <div class="col-4">
            <a href="#berita6"><img src="palmhill.webp" class="img-fluid mb-2" /></a>
            <a href="#berita6" class="judul">
              <p><b>Palm Hill Golf Resort</b></p>
            </a>
        </div>
      </div>

  
      <!----------------------------Login Form--------------------------->
      <div class="container-fluid ms-5 pt-4 pb-5">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>Login</b></p>
        <hr / class="mb-3">
        <form class="row g-3 pe-5 me-5">
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname"/>
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" />
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"/>
          </div>
          <div class="col-md-6">
            <label for="pnumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="pnumber" placeholder="+62" />
          </div>
          <div class="col-12">
            <label for="newssubject" class="form-label">Passwoord</label>
            <input type="text" class="form-control" id="newssubject" />
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-success">Login</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <footer>
    <p style="color: rgb(255, 255, 255)"><b>GOLF.ID</b></p>
    <p style="color: rgb(255, 255, 255)"><b>Copyright GOLF.ID@2023</b></p>
  </footer>
</html>