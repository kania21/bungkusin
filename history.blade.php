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
        /*    --------------------------------------------------
    :: General
    -------------------------------------------------- */
   /* body {
        font-family: 'Open Sans', sans-serif;
        color: #353535;
    }
    .content h1 {
        text-align: center;
    }
    .content .content-footer p {
        color: #6d6d6d;
        font-size: 12px;
        text-align: center;
    }
    .content .content-footer p a {
        color: inherit;
        font-weight: bold;
    }*/

/*  --------------------------------------------------
    :: Table Filter
    -------------------------------------------------- */
    .panel {
        border: 1px solid #ddd;
        background-color: #fcfcfc;
    }
    .panel .btn-group {
        margin-top: 10px;
        margin-left: 35%;
        margin-right:30%;
        text-align: center;
        width:inherit;
        display: inline-block;
    }
    .panel .btn-group .btn {
        transition: background-color .3s ease;
    }
    .table-filter {
        background-color: #fff;
        border-bottom: 1px solid #eee;
        margin-left: auto;
        margin-right: auto;
    }
    .table-filter tbody tr:hover {
        cursor: pointer;
        background-color: #eee;
    }
    .table-filter tbody tr td {
        padding: 70px;
        margin: auto;
        vertical-align: middle;
        border-top-color: #eee;
    }
    ./*table-filter tbody tr.selected td {
        background-color: #eee;
    }*/
    /*.table-filter tr td:first-child {
        width: 38px;
    }*/
    .table-filter tr td:nth-child(2) {
        width: 35px;
    }
    
    .table-filter .star {
        color: #ccc;
        text-align: center;
        display: block;
    }
    .table-filter .star.star-checked {
        color: #F0AD4E;
    }
    .table-filter .star:hover {
        color: #ccc;
    }
    .table-filter .star.star-checked:hover {
        color: #F0AD4E;
    }
    .table-filter .media-photo {
        width: 35px;
    }
    .table-filter .media-body {
        display: block;
        /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
    }
    .table-filter .media-meta {
        font-size: 14px;
        font-weight: bold;
        color: #999;
        margin-right: 30px;
    }
    .table-filter .media .title {
        color: #2BBCDE;
        font-size: 20px;
        font-weight: bold;
        line-height: normal;
        margin: 0;
    }
    .table-filter .media .title span {
        font-size: .8em;
        margin-right: 50px;
    }
    .table-filter .media .title span.selesai {
        color: #5cb85c;
    }
    .table-filter .media .title span.proses {
        color: #f0ad4e;
    }
    .table-filter .media .title span.batal {
        color: #d9534f;
    }
    .table-filter .media .summary {
        font-size: 14px;
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome! <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/history')}}">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rp 50.000</a>
                        </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="navbar-brand">
        <ul class="nav">
            <section class="content">
                <h1>History Pemesanan</h1><br>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="pull-right">
                                <div class="btn-group text-center">
                                    <button type="button" class="btn btn-warning btn-filter" data-target="proses">Dalam Proses</button>
                                    <button type="button" class="btn btn-success btn-filter" data-target="selesai">Sudah Selesai</button>
                                    <button type="button" class="btn btn-danger btn-filter" data-target="batal">Dibatalkan</button>
                                </div>
                            </div><br>
                            <div class="container">
                                <table class="table table-filter center">
                                    <tbody>
                                        <tr data-status="Dalam Proses">
                                            <td>
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/1.jpg')}}" style="width:220px;height:130px;" alt="">
                                                    </a>
                                                    <div class="col-md-2">
                                                        <span class="media-meta pull-right">2 April 2017</span>
                                                        <h4 class="title">Sego Njamoer
                                                            <span class="pull-right proses">(Dalam Proses)</span>
                                                        </h4>
                                                        <p>Jl. Rungkut No. 5</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-status="Dibatalkan">

                                        </td>
                                        
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/3.jpg')}}" style="width:220px;height:130px;"">
                                                </a>
                                                <div class="col-md-7">
                                                    <span class="media-meta pull-right">2 April 2017</span>
                                                    <h4 class="title">
                                                        Ayam Geprek
                                                        <span class="pull-right proses">(Dalam Proses)</span>
                                                    </h4>
                                                   <p>Jl.Keputih Raya no.3</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="Sudah Selesai">

                                        
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/4.jpg')}}" style="width:220px;height:130px;"">
                                                </a>
                                                <div class="col-md-7">
                                                    <span class="media-meta pull-right">29 Maret 2017</span>
                                                    <h4 class="title">
                                                        Chicken Pok-Pok
                                                        <span class="pull-right batal">(Dibatalkan)</span>
                                                    </h4>
                                                    <p>Jl.Keputih Raya no.3</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="Sudah Selesai" class="selected">

                                       
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/2.jpg')}}" style="width:220px;height:130px;"">
                                                </a>
                                                <div class="col-md-7">
                                                    <span class="media-meta pull-right">27 Maret 2017</span>
                                                    <h4 class="title">
                                                        Pentol Gilaaa
                                                        <span class="pull-right selesai">(Sudah Selesai)</span>
                                                    </h4>
                                                   <p>Jl.Keputih Raya no.3</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="Dibatalkan">
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('temp/1.jpg')}}" style="width:220px;height:130px;"">
                                                </a>
                                                <div class="col-md-7">
                                                    <span class="media-meta pull-right">25 Maret 2017</span>
                                                    <h3 class="title">
                                                        Sego Njamoer
                                                        <span class="pull-right proses">(Dalam Proses)</span>
                                                    </h3>
                                                   <p>Jl.Keputih Raya no.3</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>

<!-- Pagination -->



<!-- /.container -->

<!-- Footer -->


<!-- Bootstrap core JavaScript -->
<script type="text/JavaScript">
    $(document).ready(function () {

        $('.star').on('click', function () {
          $(this).toggleClass('star-checked');
      });

        $('.ckbox label').on('click', function () {
          $(this).parents('tr').toggleClass('selected');
      });

        $('.btn-filter').on('click', function () {
          var $target = $(this).data('target');
          if ($target != 'all') {
            $('.table tr').css('display', 'none');
            $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
        } else {
            $('.table tr').css('display', 'none').fadeIn('slow');
        }
    });

    });
</script>
<script src="temp/vendor/jquery/jquery.min.js"></script>
<script src="temp/vendor/tether/tether.min.js"></script>
<script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
