<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg
        {
            border: 2px solid black;
        }

        th
        {
            background-color: white;
            color: black;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
            border: 2px solid black;
        }

        td
        {
            border: 1px solid black;
            text-align: center;
            color: white;
        }

        .image-container {
            width: 120px;
            height: 120px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Memastikan gambar dipotong dan diposisikan sesuai dengan aspek rasio */
        }

        /* Search */
        input[type="search"]
        {
            width: 500px;
            height: 60px;
            margin-left: 50px;
        }

    </style>

  </head>
  <body>
    <!-- Navbar -->
    @include('admin.navbar')


    <!-- Sidebar start -->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <!-- Fitur search -->
            <form action="{{url('product_search')}}" method="get">
            @csrf
                <input type="search" name="search">
                <input type="submit" class="btn btn-secondary" value="Search">
            </form>

            <!-- -->
            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Starting Price</th>
                        <th>Discount</th>
                        <th>Final Price</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>

                    @foreach ($product as $products)

                    <tr>
                        <td>{{$products->title}}</td>
                        <td>{{$products->description}}</td>
                        <!-- Untuk limit kata yang bisa keluar -->
                        <!-- {!!Str::limit($products->description, 50)!!} -->

                        <td>{{$products->category}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>{{$products->starting_price}}</td>
                        <td>{{$products->discount}}</td>
                        <td>{{$products->final_price}}</td>
                        <td>
                            <div class="image-container">
                                <img src="products/{{$products->image}}" alt="Product Image">
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-danger"
                            onclick="confirmation(event)" href="{{url('delete_product', $products->id)}}">Delete</a>
                        </td>

                        <td>
                            <a class="btn btn-success"
                            href="{{url('edit_product', $products->id)}}">Edit</a>
                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>

            <div class="div_deg">
                {{$product->onEachSide(1)->links()}}
            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <!-- Untuk confirmation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function confirmation(ev)
        {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                title: "Are you sure to delete this?",
                text: "This delete will be permanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel)=>{
                if(willCancel)
                {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
