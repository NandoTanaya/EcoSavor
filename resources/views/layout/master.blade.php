<!DOCTYPE html>
<html lang="en">
  <!--divinectorweb.com-->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    {{-- CSS dari login dan register --}}
    <title>@yield('title', 'Custom Laravel')</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/partner.css')}}" rel="stylesheet">

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

    {{-- CSS register dan login END --}}


    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fredoka -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />

    {{-- ICONS --}}
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    {{-- Navbar start --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="about">EcoSavor</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="partner">Partner</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#donate">Donate</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#buy">Buy</a>
                </li> --}}
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#sell">Sell</a>
                </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="register"><i data-feather="log-in"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile"><i data-feather="user"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- Navbar END --}}

    {{-- ICONS --}}
    <script>
        feather.replace();
    </script>
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('content')
  </body>
</html>
