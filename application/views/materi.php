<?php $this->load->view('nav_login'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/materi.css">

<body>
	<main>
		<div class="container-field" style="margin-top: 7%; text-align: center;">
	       	<img src="<?php echo base_url();?>gambar/e-learn.png" width="350" height="350" alt="">
	       	<h1 style="color: white;">ELMA</h1>
        </div>		
        <ul class="griddd">
        	<!-- <li class="kotak2">
        		<h4 style="text-align: center;">Download Soal & Materi</h4>
        		<select class="dropdown center">
        			<option>--Matakuliah--</option>
        			<option>Pemrograman Web</option>
        			<option>Implementasi Perancangan Perangkat Lunak</option>
        			<option>Jaringan Komputer</option>
        		</select>
        	</li> -->
        	<li class="kotak2">
        		<h4 style="text-align: center;">Upload Jawaban</h4>
        		<div class="custom-file center">
	  				<input id="inputJawaban" type="file" class="custom-file-input" id="customFile" name="jawaban" onchange="preview()">
	  				<label class="custom-file-label" for="customFile">Choose file</label>
	  				<input class="btnCP mt-1" style="margin-bottom: 11%;" type="submit" name="submit" value="Upload">
	  				<!-- <button class="btnCP mt-2" style="margin-bottom: 11%;">Change Picture</button> -->
				</div>
        	</li>
        	<li class="kotak2" style="margin-left: 2%;">
        		<h4 style="text-align: center;">Download Soal & Materi</h4>
        		<table style="margin-top: 2%;">
        			<tr>
        				<th>No</th>
        				<th>Mata Kuliah</th>
        				<th>Materi</th>
        				<th>Download</th>
        			</tr>
        			<tr>
        				<th>1.</th>
        				<th>Pemograman Web</th>
        				<th>CSS Slide.pdf</th>
        				<th class="button">Unduh</th>
        			</tr>
        			<tr>
        				<th>2.</th>
        				<th>Implementasi Perancangan Perangkat Lunak</th>
        				<th>IMPAL Slide.pdf</th>
        				<th class="button">Unduh</th>
        			</tr>
        			<tr>
        				<th>3.</th>
        				<th>Jaringan Komputer</th>
        				<th>UDP dan TCP.docx</th>
        				<th class="button">Unduh</th>
        			</tr>
        		</table>
        		
        	</li>
        </ul>
	</main>
</body>

<?php $this->load->view('footer'); ?>