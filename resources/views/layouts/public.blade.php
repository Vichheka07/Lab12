<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title','Contact App')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
        <!-- Style -->
        <link href="{{asset('assets/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
            <a class="navbar-brand text-uppercase" href="index.html">            
                <strong><i class="bi bi-person-lines-fill me-1"></i>Contact</strong> App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex" role="search">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1"><a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a></li>   
                <li class="nav-item mx-1"><a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a></li>
                </ul>
                </form>
            </div>
            </div>
        </nav>
        <!-- content -->
        @yield('content')
    </body>
</html>