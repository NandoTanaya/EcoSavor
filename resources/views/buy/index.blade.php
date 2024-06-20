<!DOCTYPE html>
<html lang="en">

    <head>
        @include('buy.css')
    </head>

    <body>

        <!-- Navbar Start -->
        @include('master.navbar')
        <!-- Navbar End -->

        <!-- Modal Search Start (yang ada di navbar) -->
        @include('buy.search')
        <!-- Modal Search End -->

        <!-- Single Page Header start -->
        @include('buy.header')
        <!-- Single Page Header End -->

        <!-- Fruits Shop Start-->
        @include('buy.shop')


        <!-- Footer Start -->
        @include('master.footer')
        <!-- Footer End -->





        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



    </body>

</html>
