	<?php 
  $this->load->view('nav'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css">


<body>
	<main>
		<!--Bar Menu Atas-->
	<div class="container">
		
	<!--Forum pengisian username dan pass, untuk bisa mengakses ApoLine-->
	
	<div class="forum">
    <div class="row">
      <div class="col-md-5 mx-auto col-sm-5 col-xs-6 textform formlogin">
        <h3 class="text-center" style="font-family: inherit; margin-bottom: 10%;">WELCOME TO ELMA</h3>
        <?php 
          echo form_open("C_Akun/check"); 
        ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" />
          </div>
           
          <!--<p>
            Tidak mempunyai Akun? 
            <a href="<?php echo site_url('C_Akun/daftar_view')?> ">Daftar disini.</a>
          </p>-->
		  <a href="#" data-toggle="modal" data-target="#admin">Admin</a>
          <button type="submit" class="btn btn-success btn-block">MASUK</button>
        <?php echo form_close(); ?>
        </form> 
      </div>
		
		<div id="admin" class="modal fade" role="dialog">
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <?php 
                                  echo form_open("C_Akun/checkadmin"); 
                                ?>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Login Admin</h4>
                                </div>
                                <?php echo form_open("C_admin/check"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Username</label>
            							<input class="form-control" type="text" name="username" placeholder="Username" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
            							<input class="form-control" type="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                         			<input type="submit" data-dismiss="modal" class="btn btn-danger"  value="close">
                                    <input type="submit" class="btn btn-danger" name="logadmin" value="Login">
									
                                </div>
                                
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
		
      <div class="col-md-7 mx-auto col-sm-7 col-xs-12 text-center"  >
        <p class="textform-1">ELMA merupakan salah satu Aplikasi yang bisa membantu mahasiswa Informatika Tel-U, untuk belajar dengan mudah dan praktis secara online.</p>
        <img src="<?php echo base_url();?>gambar/otak.png" width="665" height="400" alt="">
      </div>
    </div>
  </div>	 
</div>
</main>
</body>
<?php 
$this->load->view('footer'); 
if($this->session->flashdata('message') == 'Gagal Login'){
  echo "<script>alert('Username or Password is Incorrect.');</script>";
}
?>