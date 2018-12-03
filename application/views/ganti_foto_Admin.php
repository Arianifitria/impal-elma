<?php $this->load->view('nav_loginadmin'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/profile.css">


<body>
<main>
<div class="container-fluid">


<!-- Profile -->
<div class="container" style="margin-top: 10%;">
	<div class="row">
		<div class="left-profile col-md-4">
			<ul>
				<li class="nav-item" >
					<a class="nav-link" style="color: white" href="<?php echo site_url('C_Profile/index1') ?>"><b>Your Profile <hr color="white"> </b></a>
				</li>
			</ul>
			<ul> 
				<li class="nav-item" >
					<a class="nav-link" style="color: white" href="#"><b>Change Picture <hr color="white"> </b></a>
				</li>
			</ul>
			<ul>
				<li class="nav-item">
					<a class="nav-link" style="color: white" href="<?php echo site_url('C_Profile/Akun_Setting1') ?>"><b>Account and Profile Setting <hr color="white"> </b></a>
				</li>
			</ul>	
		</div>
		<!--Right profile-->
		<!--Pengoprasian settingan profile-->
		
		<div class="right-profile md-8">
			
			<div class="col-md-auto">
			
			<img id="picturee" class="avatar mb-6 rounded-circle d-block mx-auto" src="<?php echo base_url();?>./gambar/profile.png">
			
			
			<h4 class="head4">
				<center>
					CHANGE YOUR PROFILE PICTURE
				</center>
			</h4>
			<?=form_open_multipart('C_PROFILE/tambah')?>
				<div class="custom-file">
	  				<input id="inputPicture" type="file" class="custom-file-input" id="customFile" name="foto" onchange="preview()">
	  				<label class="custom-file-label" for="customFile">Choose file</label>
	  				<input class="btnCP mt-1" style="margin-bottom: 11%;" type="submit" name="submit" value="Change Picture">
	  				<!-- <button class="btnCP mt-2" style="margin-bottom: 11%;">Change Picture</button> -->
				</div>
			</form>
			</div>
			
		</div>
		
	</div>
</div>

<!-- ./Profile -->

<?php $this->load->view('footer'); ?>