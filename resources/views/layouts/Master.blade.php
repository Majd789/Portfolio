<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand  ms-logo" href="#">
            <span style="color: #582083; font-size: 35px; font-weight: bold; margin-left: 15px;">M.S</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <div style="width: 10em;">

            </div>
            <ul class="navbar-nav w-100 d-flex justify-content-evenly ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('portfolio.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('portfolio.about')}}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('portfolio.projects')}}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('portfolio.contact')}}">Contact</a>
                </li>

            </ul>
            <div style="width: 25em;">

            </div>
        </div>
    </div>
</nav>
@yield('content')

<footer class="bg-dark text-white mt-5 p-4 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
<p>I am Majd Al-Steif, a software engineer specializing in web and mobile application development. I am passionate about working on innovative projects that leverage technology to enhance people's lives.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{route('portfolio.home')}}" class="text-white">Home</a></li>
                    <li><a href="{{route('portfolio.about')}}" class="text-white">About</a></li>
                    <li><a href="{{route('portfolio.projects')}}" class="text-white">Projects</a></li>
                    <li><a href="{{route('portfolio.contact')}}" class="text-white">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mt-3">
            <p>&copy; 2024 Majd Al-Steif.</p>
        </div>
    </div>


</footer>
</body>
@stack('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
