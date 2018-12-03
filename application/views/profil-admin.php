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
					<a class="nav-link" style="color: white" href="#"><b>Your Profile <hr color="white"> </b></a>
				</li>
			</ul>
			<ul> 
				<li class="nav-item" >
					<a class="nav-link" style="color: white" href="<?php echo site_url('C_Profile/Ganti_Foto1') ?>"><b>Change Picture <hr color="white"> </b></a>
				</li>
			</ul>
			<ul>
				<li class="nav-item">
					<a class="nav-link" style="color: white" href="<?php echo site_url('C_Profile/Akun_Setting1') ?>"><b>Account and Profile Setting <hr color="white"> </b></a>
				</li>
			</ul>	
		</div>
		<!--Right profile-->
		<?php 
		foreach ($adm as $admin) {?>
		<div class="right-profile col-md-6">
			
			<table class="infoo">
			
			<center>
			<img class="avatar mx-auto" src="<?php echo base_url()?>gambar/<?php echo $admin->foto;?>">
			<p style="font-weight: bold; font-size: 16px;">Your Picture</p>
			</center>
			<tr>
				<td>USERNAME</td>
				<td>:</td>
				<td><?php echo $admin->username;?></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td>:</td>
				<td><?php echo $admin->password;?></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><?php echo $admin->nama;?></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><?php echo $admin->nip;?></td>
			</tr>
			<tr>
				<td>E-MAIL</td>
				<td>:</td>
				<td><?php echo $admin->email;?></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td><?php echo $admin->alamat;?></td>
			</tr>
			</table>
		</div>
		<?php } ?>
	</div>
</div>

<!-- ./Profile -->

<?php $this->load->view('footer'); ?>