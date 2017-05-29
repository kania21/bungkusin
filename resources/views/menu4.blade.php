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
    <link href="{{url('temp/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('temp/css/1-col-portfolio.css')}}" rel="stylesheet">

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
            <div class="thumbnail">
                <a href="{{url('/bungkus')}}">
                <img src="{{url('temp/logo6.png')}}" alt="BUNGKUS.IN" href="{{url('/bungkus')}}">
                </div>
                <div class="collapse navbar-collapse" id="navbarExample">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Welcome! <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/history')}}">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/topup')}}">Rp 50.000</a>
                        </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <br>

    
    <!-- Page Content -->
    <div class="container">
        <h1 class="my-4">Chicken Pok-Pok</h1>
        <h2 id="totalsemua">Total Pembayaran : 0</h2>

        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" style="width:400px;height:260px;" src="{{url('/img/pokpokoriginal_14000.jpg')}}" alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#">Pok-Pok Original</a></h4>
                        <h2 data-price='14000' id="price1">Rp 14.000</h2>
                        <a class="btn btn-primary kurang total" href="#" data-id="1">-</a>
                        <input type="text" value="0" name="jumlah[]" class="jumlah text-center" id="jumlah1" disabled>
                        <a class="btn btn-primary tambah total" href="#" data-id="1">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" style="width:400px;height:260px;" src="{{url('/img/pokpoktempura_14000.jpg')}}" alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#">Pok-Pok Tempura</a></h4>
                        <h2 data-price='14000' id="price2">Rp 14.000</h2>
                        <a class="btn btn-primary kurang total" href="#" data-id="2">-</a>
                        <input type="text" value="0" class="jumlah text-center" id="jumlah2" disabled>
                        <a class="btn btn-primary tambah total" href="#" data-id="2">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" style="width:400px;height:260px;" src="{{url('/img/kentang_11000.jpg')}}" alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title" ><a href="#">Kentang</a></h4>
                        <h2 data-price='11000' id="price3">Rp 11.000</h2>
                        <a class="btn btn-primary kurang total" href="#" data-id="3">-</a>
                        <input type="text" value="0" class="jumlah text-center" id="jumlah3" disabled>
                        <a class="btn btn-primary tambah total" href="#" data-id="3">+</a>
                    </div>
                </div>
            </div>
            </div><br>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" style="width:400px;height:260px;" src="{{url('/img/tofu_11000.jpg')}}" alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#">Tofu</a></h4>
                        <h2 data-price='11000' id="price4">Rp 11.000</h2>
                        <a class="btn btn-primary kurang total" href="#" data-id="4">-</a>
                        <input type="text" value="0" class="jumlah text-center" id="jumlah4" disabled>
                        <a class="btn btn-primary tambah total" href="#" data-id="4">+</a>
                    </div>
                </div>
            </div>
        </div>




        <hr>

        <br>

        <div class="container">
            <div class="col-12 text-center">
                <a class="btn btn-success" style="background-color: #025aa5" href="{{url('/hasil')}}">PESAN</a>
            </div>
        </div>

        <hr>
        </div>    <!-- /.container -->

        <!-- Bootstrap core JavaScript -->
        <script src="{{url('temp/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{url('temp/vendor/tether/tether.min.js')}}"></script>
        <script src="{{url('temp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript">
            $('.tambah').on('click', function(){
                var id = $(this).data('id');
                var tes = $('#jumlah'+id).val();
                tes=parseInt(tes);
                tes=tes+1;
                $('#jumlah'+id).val(tes);
                
            });
            $('.kurang').on('click', function(){
                var id = $(this).data('id');
                var tes = $('#jumlah'+ id).val();
                tes=parseInt(tes);
                tes=tes-1;
                if (tes<0){
                alert("tidak bisa dibawah 0");
                tes = 0 ;
            }

                $('#jumlah' + id).val(tes);
                
            });
            var totalsemua=0;
            $('.total').on('click',function(){
                totalsemua=0;
                $('.jumlah').each(function(i){
                            // var id = $(this).data('id');
                            var babi=i+1
                            var harga = $('#price'+babi).data('price');
                            var total=parseInt(harga)*parseInt($('#jumlah'+babi).val());
                            // alert(total);
                            totalsemua=totalsemua+total;
                            $('#totalsemua').html('Total Pembayaran : '+totalsemua);
                            // alert($('#price'+babi ).data('price')); 
                        });
            });
            
        </script>

    </body>

    </html>
