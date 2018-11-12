<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/main.css' ?>">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<form class="form-register" method="post" action="<?php echo base_url().'Register/register' ?>">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="<?php echo base_url(). 'assets/images/logo 1.png' ?>" alt=""/>
                        <h3>Welcome to ELMA</h3>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register to ELMA</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="username *" name="id_akun" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" Nama *" name="nama_akun" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="pass_akun" />
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" name="email_akun" />
                                        </div>
                                        <div class="form-group">
                                               <select class="form-control" id="status" name="status" value="pilih">
                                                 <option value="Mahasiswa">Mahasiswa</option>
                                                 <option value="Admin">Admin</option>
                                                 <option value="Dosen">Dosen</option>
                                               </select>         
                                            </div>
                                           </div>
                                           <h2 align="center"><button type="submit"  class="btn btn-danger">selesai</button></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
</body>
</html>