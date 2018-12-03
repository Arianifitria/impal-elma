<?php $this->load->view('nav_login'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/materi.css">

<body>
	<main>
		<div class="container-field" style="margin-top: 7%; text-align: center;">
	       	<img src="<?php echo base_url();?>gambar/e-learn.png" width="350" height="350" alt="">
	       	<h1 style="color: white;">ELMA</h1>
        </div>		
        <div class="container-field col-md-12" style="margin-left: 18%">
                <div class="center">
                        <div>
                                <ul class="griddd">
                                    <div class="center">
                                          <form method="POST" action="<?php echo base_url('C_Materi/download'); ?>" enctype="multipart/form-data">                               				 
                                          
                                          <li class="kotak2 center">
                                             <h4 style="text-align: center;">DOWNLOAD JAWABAN</h4>
                                             <table style="margin-top: 2%;">
                                                <tr>
                                                   
                                                   <th>Mahasiswa</th>
                                                   <th>Option</th>
                                                </tr>
                                                <?php foreach ($member -> result() as  $value) { ?>
                                                <tr>
                                                   <th><?php echo $value->nama ?></th>
                                                   <th><input class="btnCP mt-1" style="margin-bottom: 11%;" type="submit" name="submit" value="Download"></th>
                                                </tr>
                                                <?php } ?> 
                                             </table>
                                
                                                     
                                          </li>
                                       </form>
                                       </div>
                                 </ul>
                        </div>               
                </div>
        </div>
   </main>
</body>

<?php $this->load->view('footer'); ?>