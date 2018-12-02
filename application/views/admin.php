<!doctype html>
<!-- 1301160464 -->
<html>
<head>
<meta charset="utf-8">
<title>Selamat datang di menu Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- <style>
		img{
			width: 100%;
		}
	</style> -->
<?php
        $this->load->view('nav_loginadmin');
?>
	
	
</head>

<body style="background-color: #162B3E;">
	<div class="container-fluid" style="margin-top: 150px;">
		<div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
          <h3 style="color: white">Data Nilai dan Presensi</h3><br>
          <table class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
              <tr class="thead-dark">
                    <th>Nama Mahasiswa</th>
                    <th>Username</th>
                    <th>Nilai</th>
                    <th>Presensi(%)</th>
                    <th>Option</th>
              </tr>
            </thead>
			<tbody>
			  	<?php 
                foreach($mmbr as $member) {?>
				<tr class="table-primary">
                        <td><?php echo $member['nama'];?></td>
						<td><?php echo $member['username'];?></td>
						<td><?php echo $member['nilai'];?></td>
                        <td><?php echo $member['presensi'];?></td>

				  <!-- <td><img src="<?php echo base_url();?>image/<?php echo $member['image']?>"></td> -->
						<td style="text-align: center;">
						  <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#edit<?php echo $member['username']; ?>"><i class="glyphicon glyphicon-pencil"></i>EDIT</button><br>
						</td>
				</tr>
				  
				  <div id="edit<?php echo $member['username']; ?>" class="modal fade" role="dialog">
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Nilai Mahasiswa</h4>
                                </div>
                                <?php echo form_open("C_admin/update"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nama">Nama</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $member['nama']; ?>" id="nama">
                                        <input type="hidden" name="nama" class="form-control" value="<?php echo $member['nama']; ?>" id="nama" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="username">Username</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $member['username']; ?>" id="username">
                                        <input type="hidden" name="username" class="form-control" value="<?php echo $member['username']; ?>" id="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="nilai">Nilai</label>
                                        <input type="text" name="nilai" class="form-control" value="<?php echo $member['nilai']; ?>" id="nilai" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="presensi">Presensi</label>
                                        <input type="text" name="presensi" class="form-control" value="<?php echo $member['presensi']; ?>" id="presensi" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
				  
				<!--   <div id="hapus" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus ?</h4>
                                  
                                  <input type="hidden" name="idobat" class="form-control" value="" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                
                            </div>
                        </div>
                    </div> -->
				  
				<?php } ?>
			  </tbody>
		</table>
	</div>	
	
</body>

<?php
        $this->load->view('footer');
?>
</html>