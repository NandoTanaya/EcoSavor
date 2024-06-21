<!DOCTYPE html>
<html lang="en">

    <head>
        @include('home.css')
        <style type="text/css">

            .div_deg
            {
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 7rem;
                margin: 60px;
            }

            table
            {
                border: 2px solid black;
                text-align: center;
                width: 1000px
            }

            th
            {
                border: 2px solid black;
                text-align: center;
                color: white;
                font: 20px;
                font-weight: bold;
                background-color: black;
            }

            td
            {
                border: 1px solid skyblue;
            }

            .cart_value
            {
                text-align: center;
                margin-bottom: 70px;
                padding: 18px;
            }
        </style>
    </head>

    <body>
        <!-- Spinner and Navbar start -->
        @include('master.navbar')
        <!-- Spinner and Navbar end -->


        <!-- Modal Search Start -->
        @include('home.search')
        <!-- Modal Search End -->

        <div class="div_deg">
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                </tr>
                <?php
                    $value = 0;
                ?>
                @foreach ($cart as $cart)
                @if ($cart->product)
                <tr>
                    <td>{{ $cart -> product -> title }}</td>
                    <td><img width="150" src="/products/{{ $cart -> product -> image }}"></td>
                    <td>{{ $cart -> product -> final_price }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('delete_cart', $cart->id) }}">Hapus</a>
                    </td>
                </tr>
                <?php
                $value = $value + $cart -> product -> final_price;
                ?>
                @endif
                @endforeach
            </table>
        </div>
        <div class="cart_value" href>
            <h3>Total Harga : {{ $value }}</h3>
            <button type="submit" class="btn btn-success btn-blck" id="confirmPayment">
                Bayar
            </button>
        </div>

        <!-- QRIS Modal -->
    <div
    class="modal fade"
    id="qrisModal"
    tabindex="-1"
    aria-labelledby="qrisModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="qrisModalLabel">
            Selesaikan Donasi Anda
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <p>Scan QR code dibawah untuk menyelesaikan transaksi:</p>
          <img src="qris-example.png" alt="QRIS Code" class="img-fluid" />
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-dismiss="modal"
          >
            urungkan
          </button>
          <button type="button" class="btn btn-success" id="confirmPayment">
            Pembayaran Berhasil
          </button>
        </div>
      </div>
    </div>
  </div>

        <!-- Footer Start -->
        @include('./master.footer')
        <!-- Footer End -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/donasi.js"></script>
    </body>

</html>
