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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rp 28.000</a>
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
    <div class="">
            <style>
        h5 {
            color: #3CB371;
        } </style>
        <hr class="soften"/>    
        <div class="table-responsive">
            <table class="table table-bordered table-condensed ">
                
                <tbody>
                    <tr>
                        <td colspan="2"><center>Pilih Provider</center><br> </td>
                    </tr>
                    <tr>
                        <td colspan="1"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            XL                 
                        </a>
                        <div class="collapse" id="collapseExample">
                              <div class="well">
                              <br>
                                Masukkan no.HP<br>
                                <form class="form-group" method="get" action="{{url('transfer')}}">
                                  <input type="text" name="nomor"><br>
                                  <input type="submit" value="submit">
                                </form>                                
                              </div>
                            </div></td></tr>

                    <tr><td colspan="1"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">INDOSAT</a>
                    <div class="collapse" id="collapseExample1">
                              <div class="well">
                              <br>
                                Masukkan no.HP<br>
                                <form class="form-group" method="get" action="{{url('transfer')}}">
                                  <input type="text" name="nomor"><br>
                                  <input type="submit" value="submit" href="{{url('/bungkus')}}">
                                </form>                                
                              </div>
                            </div>

                    </td></tr>

                        
                       


  

                    </tr>




<!-- <center><button type="button" href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">By Transfer</button></center> -->
                   
                   <!--  <tr>
                       
                        <td>
                            Rp 10.000<br>
                            DEBIT
                        </td>
                        
                        <td>2017/09/25</td>
            
                    </tr>
                    <tr>
                       
                        <td>
                            Rp 10.000<br>
                            KREDIT
                        </td>
                        
                        <td>2017/09/25</td>
            
                    </tr> -->
                    
                    <!-- <tr>
                        <td colspan="4">Sisa Saldo:  </td>
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
                            <span class="inner">Rp 22.000</span>
                        </span><br> Rp 28.000</td>
                    </tr> -->
                </tbody>
            </table><br/>
        <!-- <a href="{{url('/proses')}}" class="btn btn-primary navbar-toggler-right"> Konfirmasi Pesanan </a> -->
    </div>
    </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pilih Nominal</h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">

            <table class="table table-bordered table-condensed ">
                
                <tbody>

                   
                    <tr>
                       
                        <td>
                            BCA
                        </td>
                        
                                 
                    </tr>
                    <tr>
                       
                        <td>
                            BNI
                        </td>
                        
                        
            
                    </tr>
                    
                
                </tbody>
            </table>
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
