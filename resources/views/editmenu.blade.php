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
                <h3>Edit Menu</h3>
            </div>
        </div>
        <hr>
      <form class="form-horizontal" action="{{url('/updatemenu')}}" method="post" enctype="multipart/form-data">   
        <div class="container">
            <div class="clearfix">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
             <br>
                <hr><br>
                
                    <div class="col-md-12">
                        <label><b>Nama Makanan</b></label>
                    </div> 
                    <div>
                        <input class="form-control"  type="text" placeholder="ex: Sego Crispy" name="namamakanan" required><br>
                    </div>
                <br>
                <hr><br>
                
                    <div class="col-md-12">
                        <label><b>Deskripsi Makanan</b></label>
                    </div> 
                    <div>
                        <textarea class="form-control" rows="6" placeholder="Isi dengan deskripsi makanan seperti terbuat dari bahan apa,rasanya bagaimana,dll" name="deskripsi" required></textarea><br>
                    </div>
               <br>
                <hr><br>
                
                    <div class="col-md-12">
                        <label><b>Harga</b></label>
                    </div> 
                    <div>
                        <input type="text" placeholder="ex: 7000" name="harga" required>
                    </div>
                <br>
                <hr><br>
              <button type="submit" class="btn btn-primary"> Edit </button>
            </div>
    </form>
  </body>
</html>