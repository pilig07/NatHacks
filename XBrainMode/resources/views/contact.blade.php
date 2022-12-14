<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Home-Logeado) </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style type="text/css">
        .body {
            width: 100%;
            background-color: white;
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
    <div class="p-5 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Do you have a question? Contact Us</h1>
            <p class=" fs-4 text-center">If you have any problem, want to publish, any doubts we are here for you!</p>
        </div>
    </div>
    <div class="container">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded text-center">
            <div class="card-header text-center">
                Contact Information
            </div>
            <div class="card-body align-items-center">
                <p class="card-text text-center">Always available</p>
                <ul class="list-group list-group-flush align-items-center">
                    <li class="list-group-item">Phone number: 444 265 0916</li>
                    <li class="list-group-item">Mail: xBM@contact.com</li>
                    <li class="list-group-item">LikedIn: XBrainMode</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="b-example-divider"></div>
    <br>
    @include ('footer')
</body>