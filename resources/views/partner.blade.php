@extends('layout.master')
@section('title', 'Partner')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partner</title>


    <!-- CSS -->
    <link rel="stylesheet" href="css/partner.css">
    <!-- CSS end -->

</head>
<body>
    </br></br></br></br></br>
    <!-- Section Partner Header -->
    <section id='partner-header'>
        <p id="partner-pop">Yuk jadi partner!</p>
        <h1>Ada makanan sisa? Jual di platform EcoSavor dan dapatkan keuntungan lebih!</h1>
        <p>Dengan EcoSavor, jual makanan sisa, kurangi limbah makanan,</br>bantu lingkungan dan dapatkan penghasilan tambahan!</p>
    </section>

</br>
    <section class="circle">
        <div id="circle1"></div> </br>
        <div id="circle2"></div> </br>
        <div id="circle3"></div> </br>
        <div id="circle4"></div>
    </section>
</br></br>

    <!-- Section Isi -->
    <section id="partner-why">
        <h2>Kenapa harus menjadi Partner EcoSavor?</h2>
    </br>
        <div class="container-why">
            <div class="why">
                <img src="img/why1.png" class="img-why" alt="Gambar ilustrasi jual makanan">
                <h3>Jual makanan sisa dengan lebih mudah</h3>
                <p>Raih keuntungan lebih dengan jual makanan sisa hanya di 1 platform</p>
            </div>
            <div class="why">
                <img src="img/why2.png" class="img-why" alt="Gambar ilustrasi kustom jam">
                <h3>Atur sendiri jam penjualan anda</h3>
                <p>Jam berapapun, kustomisasikan dengan mudah dan cepat!</p>
            </div>
            <div class="why">
                <img src="img/why3.png" class="img-why tambah-pad" alt="Gambar ilustrasi bersama mencapai misi EcoSavor">
                <h3>Ikut berpartisipasi dalam misi kami!</h3>
                <p>Menjadi bisnis yang peduli dengan lingkungan dan minim limbah makanan!</p>
            </div>
            <div class="why">
                <img src="img/why4.png" class="img-why" alt="Gambar ilustrasi image baik">
                <h3>Banyak keuntungan yang bisa diperoleh lainnya</h3>
                <p>Menjangkau lebih banyak pelanggan baru, image bisnis yang baik dan lain sebagainya</p>
            </div>
        </div>
    </br></br>
        <div class="container-wait">
            <img src="img/why5.png" class="img-wait" alt="Gambar ilustrasi penuh kecepatan untuk bergabung menjadi partner EcoSavor">
            <div class="container-wait2">
                <h2>Jadi tunggu apalagi? Segera daftar jadi partner EcoSavor!</h2>
                <div id="button-daftar">Daftar</div>
            </div>
        </div>
    </section>
</br></br>
    <section id="partner-category">
        <h2>Kategori Makanan</h2>
    </br>
        <div class="container-category">
            <div class="category">
                <img src="img/makanan-berat.jpg" class="img-category" alt="Gambar makanan berat">
                <h4>Makanan Berat</h4>
            </div>
            <div class="category">
                <img src="img/minuman.jpg" class="img-category" alt="Gambar minuman menyegarkan">
                <h4>Minuman</h4>
            </div>
            <div class="category">
                <img src="img/camilan.jpg" class="img-category" alt="Gambar camilan burger">
                <h4>Camilan</h4>
            </div>
            <div class="category">
                <img src="img/manis-manis.jpg" class="img-category" alt="Gambar manis-manis donat">
                <h4>Manis-manis</h4>
            </div>
            <div class="category">
                <img src="img/buah-dan-sayur.jpg" class="img-category" alt="Gambar buah dan sayur">
                <h4>Buah dan Sayur</h4>
            </div>
            <div class="category">
                <img src="img/bahan-makanan.jpg" class="img-category" alt="Gambar bahan makanan">
                <h4>Bahan Makanan</h4>
            </div>
        </div>
        <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
        <button class="next" onclick="moveSlider(1)">&#10095;</button>
    </section>
    <script src="slider.js"></script>
</body>
</html>
