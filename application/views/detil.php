<!doctype html>
<!-- 1301160464 -->
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/detilproduk.css">
</head>
	
	

<body>
	<div class="container-fluid">
	
		<div class="col-md-10 mx-auto">
			<div class="row reg">
			<div class="col-md-4 kotak">
				<img style="margin-top: 10%;" src="<?php echo base_url();?>image/<?php echo $obat['image']?>">
			</div>
			
			<div class="col-md-6 kotak1">
				<h2><?php echo $obat['nama_obat']?></h2>
				<p><?php echo $obat['keterangan']?></p>
				<div class="labelharga">Rp. <?php echo $obat['harga'] ?></div>
				<a type="button" class="btn btn-info" href="#">Tambah ke Keranjang</a>
				<a type="button" class="btn btn-info" href="<?php echo site_url('C_Produk/index')?>">Kembali</a>
			</div>
		</div>
		</div>
		
		<div class="col-md-9 mx-auto kotak1">
			<table>
				<colgroup><col width="25%">
				<col>
				</colgroup>
				<tbody>
								   <tr class="first odd">
						<th class="label">Cara Pakai</th>
						<td class="data last"><?php echo $obat['cara']?></td>
					</tr>
								   <tr class="even">
						<th class="label">Penyajian</th>
						<td class="data last"><?php echo $obat['penyajian']?></td>
					</tr>
								   <tr class="odd">
						<th class="label">Khasiat</th>
						<td class="data last"><?php echo $obat['indikasi']?></td>
					</tr>
								   <tr class="even">
						<th class="label">Efek Samping</th>
						<td class="data last"><?php echo $obat['efek']?></td>
					</tr>

				</tbody>
			</table>
		</div>
		
		<div class="container">
			<div class="row reg2">
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/paper-bill.png">
					<label>CASH ON DELIVERY</label>	
					<p>The Internet Tend To Repeat</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/clock.png">
					<label>OPENING ALL WEEK</label>	
					<p>8am - 9pm</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/undo-button.png">
					<label>7 DAYS RETURN</label>	
					<p>Making It Look Like Readable</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/phone-contact.png">
					<label>Contact Us</label>	
					<p>Feel Free To Ask</p>
				</div>
			</div>
		</div>
		
		
		
	</div>
</body>
</html>