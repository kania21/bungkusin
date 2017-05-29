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
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> --> -->
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="container">
    <div class="span12">
    <div class="table-responsive">
            
           
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="2"><h4><b>Detail Pemesanan</b></h4></th>
                    <!-- <th>Nama</th>
                    <th>Harga/Pcs</th>
                    <th>Qty </th>
                    <th>Total</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img width="50" src="{{url('/img/sate_12000.jpg')}}" alt="">
                    Sate Njamoer<br><br>
                    </td>
                    
                    <td>Rp 12.000</td>
                    
                </tr>
                <tr>
                    <td>
                <img width="50" src="{{url('/img/somay_11000.jpg')}}" alt="">
                    Pentol Njamoer<br>
                    </td>
                    <td>Rp 16.000</td>
                </tr>
                 <tr>
                    <td>Total <br> </td>
                    <td>Rp 28.000</td><br>
                 </tr> 
                 <tr style="background-color: #f0ad4e ">
                    <td>BungPay <br> </td>
                    <td>Rp 50.000</td><br>
                 </tr>   
                 <tr>
                 <td>Sisa Saldo: </td>
                    <td class="label-primary"> 
                        <style type="text/css">
                        span.inner {
                            color: black;
                        }
                        span.outer {
                            color: red;
                            text-decoration: line-through;
                        }
                        </style>
                        
                    <span class="outer">

                        <span class="inner">Rp 28.000</span>
                    </span><br> Rp 22.000</td>
                </tr>
                <!-- <tr>
                    <td></td>
                    <td><br></td>
                    <td>Rp 10.000</td>
                    <td>1</td>
                    <td>Rp 10.000</td>
                </tr>
                <tr>
                    <td colspan="4">Total produk:  </td>
                    <td class="label-primary"> Rp 22.000</td>
                </tr>
                -->
            </tbody>
        </table><br/>
        <a href="{{url('/proses')}}" class="btn btn-primary navbar-toggler-right"> Konfirmasi Pesanan </a>
    </div>
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
