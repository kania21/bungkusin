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
                        <a class="nav-link" href="#" id="saldolama1">{{$saldolama}}</a>
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
            @foreach($transaksi->order as $value)
                <tr>
                    <td><img width="50" src="{{url('/img/'.$value->menu->foto)}}" alt="">
                    {{$value->menu->nama_menu}}<br><br>
                    </td>
                    
                    <td><div class="harga">{{$value->menu->harga}}</div></td>
                    
                </tr>
            @endforeach
                
                 <tr>
                    <td>Total <br> </td>
                    <td><div id="total">{{$total}}</div></td><br>
                 </tr> 
                 <tr style="background-color: #f0ad4e ">
                    <td>BungPay <br> </td>
                    <td id="saldolama3">{{$saldolama}}</td><br>
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

                        <span class="inner"><div id="saldolama2">{{$saldolama}}</div></span>
                    </span><br><div id="saldosisa">{{$saldo}}</div></td>
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
        </table><br/><form action="proses" method="get">
        <input type="hidden" name="id" value="{{$transaksi->id_transaksi}}">
        <button type="submit" class="btn btn-primary navbar-toggler-right"> Konfirmasi Pesanan </button></form>
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
        return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    }

    jumlah=0;
    // $('.harga').each(function(i){
    //     // alert($(this).html());
    //     jumlah=jumlah+parseInt($(this).html());
    // });
    $('.harga').each(function(i){
        // alert($(this).html());
        $(this).html(convertToRupiah($(this).html()))
    });
    $('#total').html(convertToRupiah($('#total').html()));
    $('#saldolama1').html(convertToRupiah($('#saldolama1').html()));
    $('#saldolama2').html(convertToRupiah($('#saldolama2').html()));
    $('#saldolama3').html(convertToRupiah($('#saldolama3').html()));
    $('#saldosisa').html(convertToRupiah($('#saldosisa').html()));

</script>

</body>
</html>
