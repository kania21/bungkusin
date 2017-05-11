<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUNGKUS.IN</title>


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
<!-- 
    Upper Header Section 
-->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <img src="{{url('temp/logo6.png')}}" alt="BUNGKUS.IN">
            <!-- <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3>Daftar Menu Baru</h3>
            </div>
        </div>
        <hr>
    <form>
        <div class="well">
            <div class="clearfix">
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Foto</b></label>
                    </div> 
                    <div>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="button" value="Upload Image" name="Upload"><br>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Nama Makanan</b></label>
                    </div> 
                    <div>
                        <input type="text" placeholder="" name="nama-makanan" required><br>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Harga</b></label>
                    </div> 
                    <div>
                        <input type="text" placeholder="Rp 15000" name="harga" required>
                    </div>
                </div>
                <hr>
              <input href="{{url('/addmenu')}}" class="btn btn-primary" type="submit" value="Tambahkan"></input>
            </div>
    </form>
  </body>
</html>