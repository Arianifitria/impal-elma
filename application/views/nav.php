<!DOCTYPE HTML>

<html>
	<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WEBPRO ASIK</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/foot.css">
    <link rel="stylesheet" type="text/css" href="css/obat.css">

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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_Akun/index')?>">Beranda
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_Akun/index')?>">Obat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_Akun/index')?>">Profile</a>
            </li>
          </ul>
        </div>
      </div>
       <div class="btn-group ">
         			<a href="<?php echo site_url('C_Akun/index') ?>"><button class="btn btn-outline-danger button">Login</button></a>
              <!--<a href="<?php echo site_url('C_Akun/daftar_view') ?>"><button class="btn btn-danger button">Register</button></a>-->
      			 </div>
</nav>
</div>
</body>