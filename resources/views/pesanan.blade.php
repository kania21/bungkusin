<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUNGKUS.IN</title>
    <link rel="shortcut icon" href="{{url('temp/nasi.png')}}">


    <!-- Bootstrap core CSS -->
    <link href="temp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="temp/css/1-col-portfolio.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
                
            }
        }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse" style="background-color: #ffce99">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a href="{{url('/bungkus')}}">
                <img src="{{url('temp/logo6.png')}}" alt="BUNGKUS.IN" href="{{url('/bungkus')}}">


            <div class="collapse navbar-collapse" id="navbarExample">

                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/history')}}">Pesanan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">BungPay : Rp 28.000</a>
                    <li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    
<br>
<br>
      
  <div class="container" style="text-align:center">
  <div class="panel panel-default">
  <table class="table">
  <thead>
    <th><h4 style="text-align:center">NOMOR PESANAN</h4></th>
    </thead>
   <td><h1><b>PS001</b></h1></td>
   

   </table>
   <p style="color:red"><i>*Tukarkan nomor ini ke merchant untuk ambil pesanan</i></p>

  <h6 style="text-align:center"><a class="btn btn-primary" href="{{url('/bungkus')}}">Kembali ke Home</a></h6>
  <a href="{{url('receipt.pdf')}}">Download Receipt</a>
 </div>
</div>

<!-- Pagination -->



<!-- /.container -->

<!-- Footer -->


<!-- Bootstrap core JavaScript -->
<script src="temp/vendor/jquery/jquery.min.js"></script>
<script src="temp/vendor/tether/tether.min.js"></script>
<script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
