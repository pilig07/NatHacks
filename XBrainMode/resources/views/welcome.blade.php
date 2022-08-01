<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

  <title>XBM(Home) </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@600&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style type="text/css">
    .body {
      width: 100%;
      background-color:#DEE7E7;
    }

    .texto1 {
      color: #401F3E;
      font-family: 'Fira Sans', sans-serif;
      position: relative;
      font-size: 60px;
      margin: auto;
      font-weight: bold;
    }

    .b1 {
      position: relative;
      top: -350px;
      margin: auto;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
@if (Auth::guest())
@include('layout')            
  @else
  
  @if(Auth::user()->idRol==1)
        @include ('layoutPlayer')
    @else    
        @include ('layoutDeveloper')
    @endif   
  @endif
  <div class="container-fluid border-bottom text-center" style="background-color: white">
    <div class="texto1">First ever NeuroTech Gaming Hub</div>
  </div>
  <div class="container-fluid" style="background-color: white">
    <section class="py-2 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Want to play?</h1>
    </section>
    <div class="album py-6">
      <div class="container-fluid" style="background-color: #401F3E">
        <div class="row row-cols-1  row-cols-md-3 g-3" style="height: 380px;">
          <div class="col">
            <div class="card shadow-sm">
              <img src="flappy.png" class="bd-placeholder-img card-img-top" width="100%" height="225">
              <div class="card-body">
                <p class="card-text">Flappy Bird is an arcade-style game in which the player controls the bird Faby, which moves persistently to the right. </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted"><a href="/flappy" class="stretched-link">Play</a></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="jump.jpeg" class="bd-placeholder-img card-img-top" width="100%" height="225">
              <div class="card-body">
                <p class="card-text">"2D adventure,a side-scrolling landscape game, avoiding obstacles </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Play</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="plane.jpeg" class="bd-placeholder-img card-img-top" width="100%" height="225">
              <div class="card-body">
                <p class="card-text">A 3D Unity Flight game of avoiding obstacles by controlling the plane's pitch.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Play</small>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
    @include('footer')
</body>