	<?php
		$this->load->view('nav_login');
	?>
	
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/beranda.css">

	<div class="container-fluid">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active" style="margin-top: 150px;">
    				 <center> <img class="d-block" width="50%" height="475px" src="<?php echo base_url();?>image/fitkom1.jpg" alt="First slide"> </center> 
        				<div class="carousel-caption d-none d-md-block">
        				<h5>...</h5>
        				<p>...</p>
  						</div>
    			</div>
    		<div class="carousel-item" style="margin-top: 150px;">
      			<center> <img class="d-block " width="50%" height="475px" style="text-align: center;" src="<?php echo base_url(); ?>image/ketum.jpg" alt="Second slide"> </center> 
    		</div>
    		<div class="carousel-item" style="margin-top: 150px;">
    			<center> <img class="d-block " width="50%" height="475px" style="text-align: center;" src="<?php echo base_url(); ?>image/bph.jpg" alt="Third slide"> </center> 
    		</div>
  			</div>
  			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	
	<ul class="griddd">
        <li class="kotak2" style="font-size: 18px;">
            <h2 style="font-weight: bold;">E-Learning Informatics</h2>
         		Aplikasi ini dikhususkan untuk mahasiswa dan dosen Informatika Tel-U, yang bertujuan untuk mempermudah proses pembelajaran antara mahasiswa dan dosen.
        </li>
        <li class="kotak2" style="font-size: 18px; margin-right: 1%; margin-left: 1%;">
         		<h2 style="font-weight: bold;">Kolaborasi dengan Prodi Informatika</h2>
         		Dosen maupun mahasiswa bisa menggunakan aplikasi ini dengan syarat bahwa dosen dan mahasiswa yang bersangkutan merupakan berasal dari Prodi Informatika.
        </li>
        <li class="kotak2" style="font-size: 18px;">
            <h2 style="font-weight: bold;">Komunikasi</h2>
			Anda bisa memiliki keterhubungan dengan dosen anda, menyesuaikan dengan matakuliah nya.
        </li>
    </ul>
	
	<?php
		$this->load->view('footer');
	?>
