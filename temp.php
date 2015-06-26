<!DOCTYPE HTML>
<html>
<head>
    <!-- META THINGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEET -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400;700|Open+Sans:400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets2/css/style.css"/>

    <!-- BACKGROUND -->
    <style>
        body {
            background: url("assets2/img/wallpaper-1.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

    <title>
        Sistem Informasi Gratifikasi
    </title>
</head>
<body>
    <div class="row header-logo">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-8-custom-header">
            <a href=""><img class="img-header-logo" src="assets/img/kpk-logo.png"></img></a>
        </div>
        <div class="col-md-2"></div>
    </div>
     <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" aria-expanded="false" id="bs-example-navbar-collapse-1">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-8-custom-navbar">
                <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#"><span class="glyphicon glyphicon-dashboard"></span>Beranda</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span>Pelaporan Gratifikasi<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Penerimaan Gratifikasi Baru</a></li>
                        <li><a href="#">Daftar Pelaporan Gratifikasi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span>Daftar Laporan<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Analisa Pelaporan</a></li>
                        <li><a href="#">Disposisi Penugasan</a></li>
                        <li><a href="#">Laporan Hasil Analisa</a></li>
                        <li><a href="#">Distribusi Pelaporan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-king"></span>Master<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Master Pelaporan</a></li> 
                        <li><a href="#">Master Mata Uang</a></li>
                        <li><a href="#">Master Jenis Peristiwa</a></li>
                        <li><a href="#">Master Checklist Kelengkapan</a></li>
                        <li><a href="#">Master Jenis Penerimaan</a></li>
                        <li><a href="#">Master Kelompok</a></li>
                        <li><a href="#">Master Status Informasi</a></li>
                        <li><a href="#">Master Status Kelengkapan</a></li>
                        <li><a href="#">Master Instansi</a></li>
                        <li><a href="#">Master Penandatangan</a></li>
                        <li><a href="#">Master Kalender</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sistem<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Master Pengguna</a></li>
                        <li><a href="#">Master Role</a></li>
                    </ul>
                </li>
                <li><a href="login2.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right"></ul>
            </div>
            <div class="col-md-2"></div>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row row-custom">
            <div class="col-md-12">
                <h1 class="center">Daftar Master Pengguna</h1>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <button class="btn btn-primary btn-primary-custom">
                    <span class="glyphicon glyphicon-plus-sign"></span>Tambah Pengguna
                </button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4"></div>
            <div class="col-md-12 col-md-12-custom">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NPP</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Lengkap</th>
                            <th>Peran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="footer footer-custom">
            <span class="footer-left">&copy; Komisi Pemberantasan Korupsi 2015, All Rights Reserved</span>
            <span class="footer-right">Sistem Informasi Gratifikasi</span>
            <div class="clear-footer"></div>
        </footer>
        <div class="footerx">

        </div>
    </div>
    <script type="text/javascript" src="assets2/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets2/js/bootstrap.min.js"></script>
</body>
</html>