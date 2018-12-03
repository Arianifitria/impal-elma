<?php $this->load->view('nav_login'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/materi.css">

<body>
	<main>
		<div class="container-field" style="margin-top: 7%; text-align: center;">
	       	<img src="<?php echo base_url();?>gambar/e-learn.png" width="350" height="350" alt="">
	       	<h1 style="color: white;">ELMA</h1>
        </div>		
        <div class="container-field">
                <div class="row">
                        <div class="col-md-8 offset-md-2">
                                <ul class="griddd">
                                        <div>
                                                <form method="POST" action="<?php echo base_url('C_Materi/unggah'); ?>" enctype="multipart/form-data">
                                        	<li class="kotak2">
                                        		<h4 style="text-align: center;">Upload Jawaban</h4>
                                        		<div class="custom-file center">
                                  				<input id="inputJawaban" type="file" class="custom-file-input" id="customFile" name="jawaban" onchange="preview()">
                                  				<label class="custom-file-label" for="customFile">Choose file</label>
                                  				<input class="btnCP mt-1" style="margin-bottom: 11%;" type="submit" name="submit" value="Upload">
                                			</div>
                                        	</li>
                                                </form>
                                        <div>
                                        <div>        
                                        	<li class="kotak2" style="margin-bottom: 4%">
                                        		<h4 style="text-align: center;">Jaringan Komputer</h4>
                                        		<table style="margin-top: 2%;">
                                                                <tr>
                                                                        <td>
                                                                                <iframe width="700" height="265" src="https://www.youtube.com/embed/IkfggBVUJxY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                        </td>
                                                                </tr>
                                        		</table>
                                        	</li>
                                                <li class="kotak2" style="margin-bottom: 4%">
                                                        <h4 style="text-align: center;">Pemrograman Web</h4>
                                                        <table style="margin-top: 2%;">
                                                                <tr>
                                                                        <td>
                                                                                <iframe width="700" height="265" src="https://www.youtube.com/embed/FXqTHsPaY0A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </li>
                                                <li class="kotak2">
                                                        <h4 style="text-align: center;">Sistem Operasi</h4>
                                                        <table style="margin-top: 2%;">
                                                                <tr>
                                                                        <td>
                                                                                <iframe width="700" height="265" src="https://www.youtube.com/embed/NN53-q-WOTw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </li>
                                        </div>        
                                </ul>
                        </div>
                </div>
        </div>
	</main>
</body>

<?php $this->load->view('footer'); ?>