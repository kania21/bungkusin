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
<!-- 
    Upper Header Section 
-->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
         <a href="{{url('/dashmerch')}}">
            <img src="{{url('temp/logo6.png')}}" alt="BUNGKUS.IN">
             <div class="collapse navbar-collapse" id="navbarExample">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome, Tiara! <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/merchant')}}">Daftar Pesanan</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/tambahmenu')}}">Tambah Menu</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/dashmerch')}}">Edit Menu</a>
                        </li>
                </ul>
            </div> 
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3>Edit Menu</h3>
            </div>
        </div>
        <hr>
      <form class="form-control">   
        <div class="container">
            <div class="clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Foto</b></label>
                    </div> 
                    <div>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div><br>
                <hr><br>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Nama Makanan</b></label>
                    </div> 
                    <div>
                        <input type="text" placeholder="ex: Sego Crispy" name="nama-makanan" required><br>
                    </div>
                </div><br>
                <hr><br>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Deskripsi Makanan</b></label>
                    </div> 
                    <div>
                        <textarea class="form-control" rows="6" placeholder="Isi dengan deskripsi makanan seperti terbuat dari bahan apa,rasanya bagaimana,dll" name="nama-makanan" required></textarea><br>
                    </div>
                </div><br>
                <hr><br>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Harga</b></label>
                    </div> 
                    <div>
                        <input type="text" placeholder="ex: 7000" name="harga" required>
                    </div>
                </div><br>
                <hr><br>
              <a href="{{url('/dashmerch')}}" class="btn btn-primary"> Edit </a>
              <a href="{{url('/dashmerch')}}" class="btn btn-danger"> Delete </a>
            </div>
    </form>
  </body>
</html>