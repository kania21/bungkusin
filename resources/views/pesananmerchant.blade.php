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

    thead {
      border-style: solid;
      border-color: black; 
      border-top-width: 2px; 
      border-left-width: 2px; 
      border-right-width: 2px; 
      border-bottom-width: 2px;
    }

    th{
      border-style: solid !important;
      border-color: black !important; 
      border-top-width: 0px !important; 
      border-left-width: 0px !important; 
      border-right-width: 0px !important; 
      border-bottom-width: 2px !important;
    }

    .borderLeft{
      border-style: solid !important;
      border-color: black !important; 
      border-top-width: 0px !important; 
      border-left-width: 2px !important; 
      border-right-width: 0px !important; 
      border-bottom-width: 0px !important;
    }

    .borderBottomRight{
      border-style: solid !important;
      border-color: black !important; 
      border-top-width: 0px !important; 
      border-left-width: 0px !important; 
      border-right-width: 2px !important; 
      border-bottom-width: 2px !important;
    }

    .borderBottomLeft{
      border-style: solid !important;
      border-color: black !important; 
      border-top-width: 0px !important; 
      border-left-width: 2px !important; 
      border-right-width: 0px !important; 
      border-bottom-width: 2px !important;
    }
.panel {
        border: 1px solid #ddd;
        background-color: #fcfcfc;
    }
    .panel .btn-group {
        margin-top: 10px;
        margin-left: 30px;
        margin-right:30px;
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

        /*table, thead, tbody, td, th {
        border: 3px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
          }*/
        </style>

      </head>

      <body>

        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="container">
           <a href="{{url('/dashmerch')}}">
            <img src="{{url('temp/logo6.png')}}" href="{{url('/dashmerch')}}" alt="BUNGKUS.IN">
            <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                            <a class="nav-link" href="#">Welcome, Tiara! <span class="sr-only">(current)</span></a>
                        </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="{{url('/tambahmenu')}}">Tambah Menu <span class="sr-only">(current)</span></a>
                    </li>   
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/dashmerch')}}">Edit Menu <span class="sr-only">(current)</span></a>
                    </li>
                 <!--    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>-->
                </ul>
              </div> 
            </div>
          </nav>
          <br>

<!--
Navigation Bar Section 
-->
<div class="container">
<h1>Daftar Pesanan</h1>
<br>
  <div class="pull-right">
    <div class="btn-group text-center">
      <button type="button" class="btn btn-warning btn-filter" data-target="proses">Dalam Proses</button>
      <button type="button" class="btn btn-success btn-filter" data-target="selesai">Sudah Selesai</button>
      <button type="button" class="btn btn-danger btn-filter" data-target="batal">Dibatalkan</button>
      <button type="button" class="btn btn-default btn-filter" data-target="all">All</button>
    </div>
  </div> 
  <hr class="soften"/>	
  <table class="table table-condensed table-bordered">
    <thead>
     <tr>
      <th>No. Pesanan</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Jumlah</th>
      <th>Harga /Unit</th>
      <th>Info Pemesan</th>
      <th>Total</th>
      <th>Proses Pemesanan</th>
    </tr>
  </thead>
  <tbody>
    <tr data-status="proses">
      <td rowspan="2" class="borderLeft"><b>PS0001</b><br><span class="pull-right proses">Dalam Proses</span></td>
      <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
      <td>Sate Njamoer<br></td>
      <td> 1 <br></td>
      <td>Rp 12.000<br></td>   
      <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
        <br></td>
        <td>Rp 12.000</td>
        <td rowspan="3" class="borderBottomRight">

          <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;   margin:auto; display:block">Dibatalkan</button>
          <script>
            function tolak() {
              alert("Pesanan ditolak");
            }
          </script><br><br>
          <button onclick="terima()" class="btn btn-warning" style="font-family: verdana; margin:auto; display:block">Dalam Proses</button>
          <script>
            function terima() {
              alert("Pesanan sedang diproses");
            }
          </script><br><br>
          <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
          <script>
            function selesai() {
              alert("Pesanan telah selesai");
            }
          </script>
        </td>
      </tr>

      <tr data-status="proses">
        <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
        <td>Somay Njamoer<br><br></td>
        <td> 2 </td>
        <td>Rp 11.000</td>
        <td> Rp 22.000</td>
      </tr>
      <tr data-status="proses" class="borderBottomLeft">
        <td colspan="6" style="font-weight: bold">Total:  </td>
        <td style="font-weight: bold;">Rp 34.000</td>
      </tr>

      <tr data-status="proses">
        <td rowspan="2" class="borderLeft"><b>PS0002</b><br><span class="pull-right proses">Dalam Proses</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        <tr data-status="proses">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="proses" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr>

        <tr data-status="batal">
        <td rowspan="2" class="borderLeft"><b>PS0003</b><br><span class="pull-right batal">Dibatalkan</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>   
        </tr>
        <tr data-status="batal">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="batal" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr> 

        <tr data-status="selesai">
        <td rowspan="2" class="borderLeft"><b>PS0004</b><br><span class="pull-right selesai">Sudah Selesai</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        <tr data-status="selesai">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="selesai" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr> 

        <tr data-status="batal">
        <td rowspan="2" class="borderLeft"><b>PS0005</b><br><span class="pull-right batal">Dibatalkan</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        <tr data-status="batal">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="batal" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr> 

        <tr data-status="proses">
        <td rowspan="2" class="borderLeft"><b>PS0006</b><br><span class="pull-right proses">Dalam Proses</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">
            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        <tr data-status="proses">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="proses" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr>

        <tr data-status="batal">
        <td rowspan="2" class="borderLeft"><b>PS0007</b><br><span class="pull-right batal">Dibatalkan</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        <tr data-status="batal">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="batal" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr> 

        <tr data-status="batal">
        <td rowspan="2" class="borderLeft"><b>PS0008</b><br><span class="pull-right batal">Dibatalkan</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        <tr data-status="batal">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="batal" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr> 

        <tr data-status="selesai">
        <td rowspan="2" class="borderLeft"><b>PS0009</b><br><span class="pull-right selesai">Sudah Selesai</span></td>
        <td><img width="100" src="{{url('/img/sate_12000.jpg')}}" alt=""><br></td>          
        <td>Sate Njamoer<br></td>
        <td> 2 <br></td>
        <td>Rp 12.000<br></td>   
        <td rowspan="2">Tia<br>Jl. KH Ahmad Dahlan No. 6 Keputih<br>085695798052<br>tiaraanggita@hotmail.com
          <br></td>
          <td>Rp 24.000</td>
          <td rowspan="3" class="borderBottomRight">

            <button onclick="tolak()" class="btn btn-danger" style="font-family: verdana;  margin:auto; display:block">Dibatalkan</button>
            <script>
              function tolak() {
                alert("Pesanan ditolak");
              }
            </script><br><br>
            <button onclick="terima()" class="btn btn-warning" style="font-family: verdana;  margin:auto; display:block">Dalam Proses</button>
            <script>
              function terima() {
                alert("Pesanan sedang diproses");
              }
            </script><br><br>
            <button onclick="selesai()" class="btn btn-success" style="font-family: verdana;  margin:auto; display:block">Sudah Selesai</button>
            <script>
              function selesai() {
                alert("Pesanan telah selesai");
              }
            </script>
          </td>
        </tr>
        
        <tr data-status="selesai">
          <td><img width="100" src="{{url('/img/somay_11000.jpg')}}" alt=""></td>
          <td>Somay Njamoer<br><br></td>
          <td> 2 </td>
          <td>Rp 11.000</td>
          <td> Rp 22.000</td>
        </tr>
        <tr data-status="selesai" class="borderBottomLeft">
          <td colspan="6" style="font-weight: bold">Total:  </td>
          <td style="font-weight: bold;">Rp 46.000</td>
        </tr> 

      </tbody>
    </table>
  </div>

</tr></tbody></table></div>


<script src="temp/vendor/jquery/jquery.min.js"></script>
<script src="temp/vendor/tether/tether.min.js"></script>
<script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/JavaScript">
    // $(document).ready(function () {


        $('.btn-filter').on('click', function () {
            // alert('aa');
          var $target = $(this).data('target');
          // alert($target);
          if ($target != 'all') {
            $('.table tr').css('display', 'none');
            $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
        } else {
            $('.table tr').css('display', 'none').fadeIn('slow');
        }
        });

    // });
</script>
</body>
</html>