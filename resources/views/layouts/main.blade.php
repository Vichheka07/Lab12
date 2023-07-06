<!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title','Contact App')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <!-- Style -->
        <!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="/">            
            <strong><i class="bi bi-person-lines-fill me-1"></i>Contact</strong> App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Company</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#">Contact</a>
                </li>
                @endauth
            </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item mx-1"><a href="{{route('login')}}" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-right me-1"></i>Login</a></li>
                <li class="nav-item mx-1"><a href="{{route('register')}}" class="btn btn-outline-primary"><i class="bi bi-person-plus-fill me-1"></i></i>Register</a></li>
                    @else
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.html">Settings</a></li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                    </form>
                    </ul>
                </li>
                    @endguest
                </ul>
            </div>
        </div>
        </nav>
        @yield('content');
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
