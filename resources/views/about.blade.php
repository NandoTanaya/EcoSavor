<!DOCTYPE html>
<html lang="en">
  <!--divinectorweb.com-->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

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
                <a class="nav-link" href="#partner">Partner</a>
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

    {{-- @extends('layout.master')
    @section('title', 'about')
    @section('content') --}}

    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carousel4.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Donate</h5>
            <p>
              Donate your ugly food or participate in ugly food donation for
              people here
            </p>
            <p><a href="#" class="btn btn-warning mt-3">Donate here</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carousel2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Buy</h5>
            <p>
              Buy ugly foods around your area with lower price and good quality
              here
            </p>
            <p><a href="#" class="btn btn-warning mt-3">Buy here</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carousel3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Sell</h5>
            <p>Sell your good condition ugly food here</p>
            <p><a href="#" class="btn btn-warning mt-3">Sell here</a></p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- about section starts -->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="img/about.jpg" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>
                Kami menyediakan platform bagi makanan sisa yang masih berpeluang menjadi makanan enak!
              </h2>
              <p>
                EcoSavor merupakan website yang menyediakan berbagai macam sisa
                makanan yang masih layak disantap bagi konsumen dengan harga
                murah. Dengan membeli dan menjual sisa makanan, kita dapat
                mengurangi sampah organik sekaligus menghemat biaya.
              </p>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section Ends -->
    <!-- services section Starts -->
    <section class="services section-padding" id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Motto dan fitur kami</h2>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur <br />adipisicing elit.
                Non, quo.
              </p> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <img
                  src="img/Elemen minim waste.png"
                  class="d-block w-100 h-100"
                  alt="..."
                />
                <h3 class="card-title">Minimize waste</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <img
                  src="img/Elemen donate.png"
                  class="d-block w-100 h-100"
                  alt="..."
                />
                <h3 class="card-title" style="padding-top: 13px">Donate</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <img
                  src="img/low_prices.png"
                  class="d-block w-100 h-100"
                  alt="..."
                />
                <h3 class="card-title">Low Prices</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- services section Ends -->

    <!-- portfolio strats -->
    <section id="portfolio" class="portfolio section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Mengapa perlu ecosavor?</h2>
              <p>Menurut Kajian BAPPENAS (2021)</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/project-1.jpg" class="img-fluid" alt="" />
                </div>
                <h3 class="card-title">Limbah</h3>
                <p class="lead">
                  23-48 juta ton/tahun makanan terbuang sia-sia di Indonesia
                </p>
                <button class="btn bg-warning text-dark">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/project-2.jpg" class="img-fluid" alt="" />
                </div>
                <h3 class="card-title">Ekonomi</h3>
                <p class="lead">
                  Kerugian ekonomi sebesar Rp 213-551 triliun/thn, setara 4-5%
                  PDB Indonesia/thn
                </p>
                <button class="btn bg-warning text-dark">learn More</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/project-3.jpg" class="img-fluid" alt="" />
                </div>
                <h3 class="card-title">Inefisien</h3>
                <p class="lead">
                  Makanan terbuang setara dengan porsi makan 61-125 juta
                  orang/tahun
                </p>
                <button class="btn bg-warning text-dark">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- portfolio ends -->
    {{-- Sell Section START--}}
    <section class="sell section-padding">
      <div class="container" style="max-width: 50rem">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="img/Elemen Belanjna.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>
                Ayo jual makanan yang tak terjual <span>disini!</span>
              </h2>
              <p>
                Pastikan makanan sisa yang kamu jual itu masih layak untuk dimakan atau diolah kembali.
              </p>  
              <p><a href="#" class="btn btn-warning mt-3">Sell here</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Sell Section END--}}
    <!-- team starts -->
    <section class="team section-padding" id="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Tim kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  src="img/team-1.jpg"
                  alt=""
                  class="img-fluid rounded-circle"
                />
                <h3 class="card-title py-2">I Made Ananda</h3>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  src="img/team-2.jpg"
                  alt=""
                  class="img-fluid rounded-circle"
                />
                <h3 class="card-title py-2">Ogden Leiyendra</h3>
                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  src="img/team-3.jpg"
                  alt=""
                  class="img-fluid rounded-circle"
                />
                <h3 class="card-title py-2">Rahel Andrea Arabella</h3>
                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img
                  src="img/team-4.jpg"
                  alt=""
                  class="img-fluid rounded-circle"
                />
                <h3 class="card-title py-2">I Made Novrada</h3>
                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- team ends -->
    <!-- Contact starts -->
    <section id="contact" class="contact section-padding">
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Hubungi kami</h2>
            </div>
          </div>
        </div>
        <div class="row m-0">
          <div class="col-md-12 p-0 pt-4 pb-4">
            <form action="#" class="bg-light p-4 m-auto">
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <input
                      class="form-control"
                      placeholder="Full Name"
                      required=""
                      type="text"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <input
                      class="form-control"
                      placeholder="Email"
                      required=""
                      type="email"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <textarea
                      class="form-control"
                      placeholder="Message"
                      required=""
                      rows="3"
                    ></textarea>
                  </div>
                </div>
                <button
                  class="btn btn-warning btn-lg btn-block mt-3"
                  type="button"
                >
                  Send Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- contact ends -->
    <!-- footer starts -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white">All Right Reserved By @ecosavor</p>
      </div>
    </footer>
    <!-- footer ends -->

    {{-- ICONS --}}
    <script>
      feather.replace();
    </script>
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
{{-- @endsection --}}
<!--for getting the form download the code from download button-->
