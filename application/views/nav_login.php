<!DOCTYPE HTML>

<html>
	<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Elements - Introspect by TEMPLATED</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/foot.css">
    <link rel="stylesheet" type="text/css" href="css/obat.css">
		<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

		<!-- Header -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand logo" href="#" style="font-size: 30px; color: White;font-family: Inherit">ELMA
          <img src="<?php echo base_url();?>gambar/e-learn.png" width="50" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('C_Home/index')?>">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_Produk/index')?>">Nilai & Presensi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_Materi/index')?>">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_Profile/index')?>">Profile</a>
            </li>
          </ul>
        </div>
      </div>
      <div class ="btn-group">
        <a href="<?php echo site_url('C_Akun/logout') ?>"><button class="btn btn-outline-danger button">Logout</button></a>
      </div>
</nav>
</div>
</body>