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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rp 5.000.000</a>
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
    <div>
        <hr class="soften"/> 

        <div class="table-responsive">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
            <table class="table table-bordered table-condensed ">
                
                <tbody>
                    <tr>
                        <td colspan="2"><center>Transfer : <h1 id="saldo">{{$isi}}</h1>
                         </td></center>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-6" style="text-align: center">
                                    <input type="radio" name="gender" value="male"><img src="{{url('temp/mandiri.png')}}" style="width:150px;height:75px">
                                </div>
                                <div class="col-md-6">
                                     MANDIRI<br>
                                        721-213-230<br>
                                        a.n PT Bungkusin
                                </div>
                            </div>
                        </td>
                    </tr>
                   <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-6" style="text-align: center">
                                    <input type="radio" name="gender" value="male"><img src="{{url('temp/bca.png')}}" style="width:150px;height:75px">
                                </div>
                                <div class="col-md-6">
                                     BCA<br>
                                        721-213-230<br>
                                        a.n PT Bungkusin
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-6" style="text-align: center">
                                    <input type="radio" name="gender" value="male"> <img src="{{url('temp/bni.png')}}" style="width:150px;height:70px">
                                </div>
                                <div class="col-md-6">
                                     BNI<br>
                                        721-213-230<br>
                                        a.n PT Bungkusin
                                
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <center>
                <form class="form-horizontal" action="{{url('/withdrawget')}}" method="get">
                  <div class="form-group">
                    <label class="control-label col-sm-5" for="email">No. Rekening:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="email" placeholder="No. Rekening">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-5" for="pwd">Nama Pemilik Rekening:</label>
                    <div class="col-sm-5"> 
                      <input type="text" class="form-control" id="pwd" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-5">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
                </center>
            <br>

        <div class="col s12" style="text-align: right">
            <a  href="{{url('/topup')}}" class="btn btn-primary">Kembali ke Topup</a>
        </div>
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
<script type="text/javascript">
    function convertToRupiah(angka)
    {
        var rupiah = '';        
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
        return 'Rp '+rupiah.split('',rupiah.length-1).reverse().join('');
    }

    $('#saldo').html(convertToRupiah($('#saldo').html()));
</script>

</body>
</html>
