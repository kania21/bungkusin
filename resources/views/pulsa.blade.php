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
                        <a class="nav-link" href="{{url('/history')}}">History Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BungPay : Rp 28.000</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="container">
    <div class="span12">
    <div class="">
            
        <div class="table-responsive">
            <table class="table table-bordered table-condensed ">
                
                <tbody>
                    <tr>
                        <center><label><img src="{{url('temp/sim.png')}}" style="width: 40px;height: 40px"><b><h2>Pilih Provider</h2></b></center></label>
                        <td>
                        <select class="form-control">
                          <option>simPATI</option>
                          <option>Kartu AS</option>
                          <option>Mentari Ooredoo</option>
                          <option>IM3 Ooredoo</option>
                          <option>XL</option>
                          <option>3</option>
                        </select><br><center>
                        <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Pilih                 
                        </a></center>
                        <div class="collapse" id="collapseExample">
                              <div class="well" style="text-align: center">
                              <br>
                                <label>Masukkan no.HP</label><br>
                                <form class="form-group" method="get" action="{{url('topup')}}">
                                  <input type="text" name="nomor"><br><br>
                                  <input class="btn btn-primary" type="submit" value="Submit">
                                </form>                                
                              </div>
                            </div>
                            </td>
                    </tr>

                   





      
<!-- Pagination -->
<!-- /.container -->
<!-- Footer -->
<!-- Bootstrap core JavaScript -->
<script src="temp/vendor/jquery/jquery.min.js"></script>
<script src="temp/vendor/tether/tether.min.js"></script>
<script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
