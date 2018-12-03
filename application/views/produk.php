<!-- 1301160464 -->
<?php $this->load->view('nav_login'); ?>        
<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/produk.css">


<body>
        <main>
                <div class="container-field" style="margin-top: 7%; text-align: center;">
                <img src="<?php echo base_url();?>gambar/e-learn.png" width="350" height="350" alt="">
                <h1 style="color: white;">ELMA</h1>
                </div>
                <ul class="griddd">
                        <li class="kotak2">
                                <h4 style="text-align: center;">Presensi</h4>
                        <table style="margin-top: 2%;">
                                <tr>
                                        <th>No</th>
                                        <th>Mata Kuliah</th>
                                        <th>Persentase</th>
                                </tr>
                        <?php foreach ($matakuliah -> result() as  $value) { ?>
                                <tr>
                                        <th><?php echo $value->id_matkul ?></th>
                                        <th><?php echo $value->nama_matkul ?></th>
                                        <th>95%</th>
                                </tr>
                                <?php } ?> 
                        </table>
                                
                                                     
                        </li>
                        <li class="kotak2" style="margin-left: 2%;">
                        <h4 style="text-align: center;">Nilai</h4>
                        <table style="margin-top: 2%;">
                                <tr>
                                        <th>No</th>
                                        <th>Mata Kuliah</th>
                                        <th>Nilai Akhir</th>
                                </tr>
                                <?php foreach ($matakuliah -> result() as  $value) { ?>
                                <tr>
                                        <th><?php echo $value->id_matkul ?></th>
                                        <th><?php echo $value->nama_matkul ?></th>
                                        <th>95</th>
                                </tr>
                                <?php } ?>
                        </table>
                                
                                      
                        </li>
                </ul>
        </main>
</body>