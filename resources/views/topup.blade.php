<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/topup')}}">Rp 28.000</a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> --> 
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
                        <td colspan="2" style="background-color:    #f0ad4e"><center>BungPay : <b><h1>Rp 29.000</h1></b></center></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a style="width: 100%" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <img src="{{url('temp/transfer.png')}}" style="width: 50px;height: 50px"><br>
                            <center><b>Via Transfer Bank</b></center></a>
                            <div class="collapse" id="collapseExample">
                              <div class="well">
                              <br>
                                <label>Pilih Nominal</label><br>
                                <form class="form-group" method="get" action="{{url('transfer')}}">
                                  <label class="radio-inline"><input type="radio" name="gender" value="10000" checked> Rp 10.000</label><br>
                                  <label class="radio-inline"><input type="radio" name="gender" value="25000"> Rp 25.000</label><br>
                                  <label class="radio-inline"><input type="radio" name="gender" value="50000"> Rp 50.000</label><br><br>
                                  <input class="btn btn-primary" type="submit" value="Pilih">
                                </form>                             
                              </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a style="width: 100%" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                            <img src="{{url('temp/hp.png')}}" style="width: 50px;height: 50px"><br>
                            <center><b>Via Pulsa</b></center></a>
                            <div class="collapse" id="collapseExample1">
                              <div class="well">
                              <br>
                                <label>Pilih Nominal</label><br>
                                <form class="form-group" method="get" action="{{url('pulsa')}}">
                                  <label class="radio-inline"><input type="radio" name="gender" value="10000" checked> Rp 10.000</label><br>
                                  <label class="radio-inline"><input type="radio" name="gender" value="25000"> Rp 25.000</label><br>
                                  <label class="radio-inline"><input type="radio" name="gender" value="50000"> Rp 50.000</label><br><br>
                                  <input class="btn btn-primary" type="submit" value="Pilih">
                                </form>                             
                              </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">                              
                            <a style="width: 100%" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                            <img src="{{url('temp/topup.png')}}" style="width: 50px;height: 50px"><br>
                            <center><b>History BungPay</b></center></a>
                            <div class="collapse" id="collapseExample2">
                              <div class="well">
                                  <br>
                                    <div style="overflow-x:auto;">
                                      <table class="table table-hover">
                                          <thead>
                                            <th>Tanggal</th>
                                            <th>Topup/Pakai</th>
                                            <th>Jumlah</th>
                                          </thead>
                                          <tr>
                                            <td>15 April 2017</td>
                                            <td><p style="color:#5cb85c">Topup</p></td>
                                            <td>50.000</td>
                                          </tr>
                                          <tr>
                                            <td>13 April 2017</td>
                                            <td><p style="color:#d9534f">Pakai</p></td>
                                            <td>20.000</td>
                                          </tr>
                                          <tr>
                                            <td>1 April 2017</td>
                                            <td><p style="color:#5cb85c">Topup</p></td>
                                            <td>50.000</td>
                                          </tr>
                                      </table>
                                    </div> 
                              </div>
                            </div>
                        </td>
                    </tr>

                       

  

                 


                   
                   <!--  <tr>
                       ""
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
    
<!-- Pagination -->
<!-- /.container -->
<!-- Footer -->
<!-- Bootstrap core JavaScript -->
<script src="temp/vendor/jquery/jquery.min.js"></script>
<script src="temp/vendor/tether/tether.min.js"></script>
<script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
