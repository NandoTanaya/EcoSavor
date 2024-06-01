<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Custom Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <style>
        :root {
            --primary: #664c25;
            --bg: #efe5d8;
            --bgc: #DEC493;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: var(--bg);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .navbar {
            position:fixed;
            background-color: var(--bg);
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
        .nav-link {
            padding-right: .5rem !important;
            padding-left: .5rem !important;
        }
        .ml-auto {
            margin-left: 0 !important;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EcoSavor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Donate</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>
