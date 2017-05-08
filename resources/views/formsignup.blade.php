<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUNGKUS.IN</title>

    <!-- Bootstrap core CSS 
    <link href="{{url('temp/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    Custom styles for this template 
    <link href="{{url('temp/css/1-col-portfolio.css')}}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
                color: #ffce99;
            }
        }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse" style="background-color: black">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
<!--             <a class="navbar-brand" href="index.php">BUNGKUS.IN</a>
 -->
                <img src="{{url('temp/logo6.png')}}" alt="BUNGKUS.IN" href="{{url('/bungkus')}}">
            <div class="collapse navbar-collapse" id="navbarExample">
<!-- 
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Sign Up <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="container ">
        <form>
          <div class="container ">
               <div class="row well">
                <div class="col-md-4">
                    <label><b>Nama</b></label>
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Enter Name" name="name" required>
                </div>
            </div>
             <div class="row well">
                <div class="col-md-4">
                    <label><b>Tgl.Lahir</b></label>
                </div>
                <div class="col-md-6">
                    <input type="date" placeholder="Enter Date" name="date" required>
                </div>
            </div>
             <div class="row well">
                <div class="col-md-4">
                    <label><b>No.HP</b></label>
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="08...." name="email" required>
                </div>
            </div>
              <div class="row well">
                <div class="col-md-4">
                    <label><b>Email</b></label>
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Enter Email" name="email" required>
                </div>
            </div>
            <div class="row well">
              <div class="col-md-4">
                <label><b>Password</b></label>
            </div>
            <div class="col-md-6">
                <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
        </div>
        <div class="row well">
          <div class="col-md-4">
            <label><b>Repeat Password</b></label>
        </div>
        <div class="col-md-6">
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
        
        </div>
    </div>
    <div class="row well">
    <p class="text-center">Dengan membuat akun ini Anda telah menyetujui ketentuan & persyaratan <a href="#">Ketentuan & Persyaratan</a>.</p>
      <div class="clearfix text-center">
          <a type="btn btn-success"  class="cancelbtn" href="{{url('/')}}">Sign Up</a>
<!--          <a type="submit" class="signupbtn" href="{{url('/bungkus')}}">Sign Up</a>-->
      </div>
  </div>
</form>
</div>


<!-- /.container -->

<!-- Footer -->
<!-- <footer class="py-5 bg-inverse">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    </.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{url('temp/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('temp/vendor/tether/tether.min.js')}}"></script>
<script src="{{url('temp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
