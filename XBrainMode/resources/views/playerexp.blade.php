<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

  <title>XBM(Player) </title>

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
      background-color: white;
    }

    .texto1 {
      color: #143f9a;
      font-family: 'Fira Sans', sans-serif;
      position: relative;
      font-size: 60px;
      top: -400px;
      margin: auto;
      font-weight: bold;
    }

    .b1 {
      position: relative;
      top: -350px;
      margin: auto;
    }

    .icon {
      color: #2f4858;
      font-size: 60px;
      text-align: center;
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
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Are you a BCI user that wants to play some games?</h1>
        <p class="col fs-4">Be a player in XBM, it is really easy you just need to register and be part of the community</p>
      </div>
    </div>
    <div class="container">
    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
  <div class="card-header text-center">
    Player Subscription
  </div>
  <div class="card-body align-items-center">
    <h5 class="card-title text-center">Benefits</h5>
    <p class="card-text text-center">Play nice videogames</p>
    <ul class="list-group list-group-flush align-items-center">
    <li class="list-group-item">Rate the games and add some feedback for the developers</li>
    <li class="list-group-item">Add the games that you like the most to you favorite list!</li>
    <li class="list-group-item">Games created specifically for the BCI</li>
    <li class="list-group-item card-title"><a class="link-secondary" href="/register/{{1}}" style="color:#401F3E;">Register</a></li>
  </ul>
  </div>
</div>
    </div>
    <div class="b-example-divider"></div>
    <br>
    <h1 class="text-muted text-center">Join this great community!</h1>
    <br><br>
    <div class="row">
      <div class="col-lg-4 align-items-center">
      <img src="p1.jpeg" class= "mx-auto d-block" width="300" height="300"  alt="...">
      </div>
      <div class="col-lg-4 align-items-center">
        <img src="p2.jpeg" class="mx-auto d-block" width="300" height="300"  alt="...">
      </div>
      <div class="col-lg-4 align-items-center">
      <img src="p3.jpeg" class="mx-auto d-block" width="300" height="300"  alt="...">
      </div>
    </div>
    <br>
  @include('footer')
</body>