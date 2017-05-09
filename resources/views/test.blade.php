<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUNGKUS.IN</title>

    <!-- Bootstrap core CSS -->
    <link href="temp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="temp/css/1-col-portfolio.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.png">

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
                            <a class="nav-link" href="{{url('topup')}}">Rp 50.000</a>
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
        <!-- Page Heading -->
        <div class="navbar-brand">
            <ul class="nav">
                <!-- <h1 class="my-4">PILIH MERCHANT</h1> -->
                <style> 
                    input[type=text] {
                        width: 398px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        font-size: 16px;
                        background-color: white;
                        background-image: url('searchicon.png');
                        background-position: 10px 10px; 
                        background-repeat: no-repeat;
                        padding: 12px 30px 12px 20px;
                        -webkit-transition: width 0.4s ease-in-out;
                        transition: width 0.4s ease-in-out;
                    }

                /*input[type=text]:focus {
                    width: 60%;
                }*/
            </style>
        </head>
        <body>

            <h1 class="my-4">PILIH MERCHANT</h1>

            <form role="search" method="get" action="" class="my-4">
                <div class=container>
                    <div class="col-md-8" style="text-align: right;">
                        <input type="text" name="search" placeholder="Cari Merchant">
                        <!-- <link rel="icon" href="http://www.freeiconspng.com/uploads/search-icon-png-2.png"> -->
                    </div>
                </div>
            </form>
        </ul>
    </div>

    <!-- Project One -->
    <div class="row">

        <div class="col-md-7">

            <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/1.jpg')}}" style="width:404px;height:228px;" alt="">

        </div>
        <div class="col-md-5">
            <style type="text/css">
                h8.tutup {
                    color: red;
                }
            </style>
            <h3>SEGO NJAMOER</h3>
            <h7>Jl. Gebang Wetan No. 2B<br>Gebang Putih, Sukolilo<br>Surabaya<br></h7>
            <h8 style="font-weight: bold">Buka Pukul 08.00 - 22.00</h8><br>
            <h8 style="font-weight: bold; color: red">Tutup!</h8><br><br>
            <a class="btn btn-danger" href="#">Lihat Menu</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/2.jpg')}}" style="width:404px;height:228px;" alt="">
        </div>
        <div class="col-md-5">
            <h3>PENTOL GILAAA</h3>
            <h7>Jl. Raya Rungkut Madya No.23<br>Rungkut Kidul, Rungkut<br>Surabaya<br></h7>
            <h8 style="font-weight: bold">Buka Pukul 08.00 - 22.00</h8><br><br>
            <a class="btn btn-primary" id=1 href="{{url('/menu/2')}}">Lihat Menu</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-7">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/3.jpg')}}" style="width:404px;height:228px;" alt="">                
        </div>
        <div class="col-md-5">
            <h3>AYAM GEPREK</h3>
            <h7>Jl. Dharmawangsa No.115<br>Kertajaya, Gubeng<br>Surabaya<br></h7>
            <h8 style="font-weight: bold">Buka Pukul 11.00 - 22.00</h8><br><br>
            <a class="btn btn-primary" href="{{url('/menu/3')}}">Lihat Menu</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

        <div class="col-md-7">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/4.jpg')}}" style="width:404px;height:228px;" alt="">                
        </div>
        <div class="col-md-5">
            <h3>CHICKEN POK-POK</h3>
            <h7>Jl. Basuki Rahmat No. 8-12<br> Tunjungan PLaza I Food Court<br> Surabaya<br></h7>
            <h8 style="font-weight: bold">Buka Pukul 11.00 - 21.30</h8><br><br>
            <a class="btn btn-primary" href="{{url('/menu/4')}}">Lihat Menu</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- /.container -->

            <!-- Footer -->
            <footer class="py-5 bg-inverse">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
                </div>
                <!-- /.container -->
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="temp/vendor/jquery/jquery.min.js"></script>
            <script src="temp/vendor/tether/tether.min.js"></script>
            <script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>

        </body>

        </html>
