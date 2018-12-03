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
				<li class= "nav-item" >
					<a class="nav-link" style="color: white" href="<?php echo site_url('C_Profile/index1') ?>"><b>Your Profile <hr color="white"> </b></a>
				</li>
			</ul>
			<ul>
				<li class="nav-item" >
					<a class="nav-link" style="color: white" href="<?php echo site_url('C_Profile/Ganti_Foto1') ?>"><b>Change Picture <hr color="white"> </b></a>
				</li>
			</ul>
			<ul>
				<li class="nav-item">
					<a class="nav-link" style="color: white" href="#"><b>Account and Profile Setting <hr color="white"> </b></a>
				</li>
			</ul>
		</div>
		<!--Right profile-->
		<!--Pengoprasian settingan profile-->
		<!-- <!-- <!--  --> --> -->
		<div class="right-profile col-md-6">
			
			<form method="POST" action="<?php echo base_url("C_PROFILE/editData"); ?>" enctype="multipart/form-data">
			<div class="form-group" style="margin-top: 2%;">
            	<label for="username">Username</label>
            	<input class="form-control" type="text" name="username" placeholder="Username" />
          	</div>
          	<div class="form-group">
            	<label for="password">Password</label>
            	<input class="form-control" type="password" name="password" placeholder="New Password or Old Password" />
          	</div>
          	<div class="form-group">
            	<label for="name">Name</label>
            	<input class="form-control" type="text" name="nama" placeholder="Name" />
          	</div>
          	<div class="form-group">
            	<label for="nip">NIP</label>
            	<input class="form-control" type="text" name="nip" placeholder="NIP" />
          	</div>
          	<div class="form-group">
            	<label for="email">E-Mail</label>
            	<input class="form-control" type="text" name="email" placeholder="New E-Mail or Old E-Mail" />
          	</div>
          	<div class="form-group">
            	<label for="address">Address</label>
            	<input class="form-control" type="text" name="alamat" placeholder="New Address or Old Address" />
          	</div>

          	
          	<input type="submit" class="btnCP btn-success" name="btnsave" value="Save" />
        	</form> 
		</div>
		

	</div>
</div>

<!-- ./Profile -->
<?php $this->load->view('footer'); ?>