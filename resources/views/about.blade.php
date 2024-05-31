<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecosavor</title>
    <!-- Fonts -->
    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Fredoka -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Ecosavor</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#buy">Beli</a>
        <a href="#partner">Partner</a>
        <a href="#donate">Donasi</a>
      </div>
      <div class="navbar-extra">
        <a href="#keranjang" id="keranjang"><i data-feather="shopping-cart"></i></a>
        <a href="#login" id="login"><i data-feather="log-in"></i></a>
        <a href="#humenu" id="humenu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- landing page section -->
    <section class="hero" id="home">
      <div class="content">
        <h1>Apa itu</h1>
        <h2>EcoSavor?</h2>
        <p>EcoSavor merupakan website yang menyediakan berbagai macam sisa makanan yang masih layak disantap bagi konsumen dengan harga murah. Dengan membeli dan menjual sisa makanan, kita dapat mengurangi sampah organik sekaligus menghemat biaya.</p>
        <!-- <img src="Elemen what is ecosavor.png" alt="what is ecosavor" width="300" height="260"> -->
      </div>

      <div class="gambar_ecosavor">
        <img src="img/Elemen what is ecosavor.png" alt="what is ecosavor" width="300" height="260">
      </div>
    </section>
    <!-- 3point -->
    <section class="point">
      <div class="mw">
        <img src="img/Elemen minim waste.png" alt="Minimize Waste" width="200" height="200">
        <p>Minimize Waste</p>
      </div>
      <div class="donate">
        <img src="img/Elemen donate.png" alt="donate" width="200" height="200">
        <p>Donate</p>
      </div>
      <div class="lp">
        <img src="img/low_prices.png" alt="low prices" width="200" height="200">
        <p>Low Prices</p>
      </div>
    </section>
    <section class="Mengapa">
      <div class="mengapa">
        <h1>Mengapa perlu Ecosavor?</h1>
        <h2>Menurut kajian BAPPENAS(2021)</h2>
        <p>23-48 juta ton/tahun makanan terbuang sia-sia di Indonesia</p>
        <p>Kerugian ekonomi sebesar Rp 213-551 triliun/tahun <span>(Setara 4-5% PDB Indonesia per tahun)</span></p>
        <p>Setara dengan porsi makan 61-125 juta orang/tahun</p>
      </div>
    </section>
    <section class="membeli">
      <div class="membeli">
        <h1>Mari selamatkan makanan</h1> 
        <h1>dengan harga spesial <span>disini !</span></h1>
      </div>
    </section>
    <!-- landing page end -->
      <!-- Icons -->
    <script>
      feather.replace();
    </script>
    <!-- Javascript -->
    <script src="js/humenu.js"></script>
  </body>
</html>