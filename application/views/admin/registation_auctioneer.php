<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="<?=base_url()?>source/icon.png">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <!-- sb admin -->
        <link href="<?=base_url();?>source/vendor/sb/css/styles.css" rel="stylesheet" />
        <!--Datatables-->
        <link rel="stylesheet" href="<?=base_url()?>source/vendor/datatables/css/jquery.dataTables.min.css">
        <!-- Jquery -->
        <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
        <!-- Font awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>  
        <style type="text/css">
          .messages{
            font-size: 9pt;
            margin-top: 6px;
            color: #e43;
          }
        </style>
    </head>
    <body>
<?php $this->load->view('admin/navbar')?>
    <div id="layoutSidenav">
    <?php $this->load->view('admin/navside')?>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Tambah akun</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">Pelelang</li>
              <li class="breadcrumb-item active">Tambah akun</li>
            </ol>
              <div class="row">
                <div class="col-xl-6 col-md-8">
                  <?= form_open("admin/registration_auctioneer", array("id"=>'main'))?>
                    <div class="form-group">
                      <label for="Pengguna">Nama Pengguna</label>
                      <input type="text" name="username" class="form-control" id="Pengguna" aria-describedby="emailHelp" value="<?=set_value('username')?>">
                      <?= form_error('username'); ?>
                      <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                      <label for="Lengkap">Nama Lengkap</label>
                      <input type="text" name="full_name" class="form-control" value="<?=set_value('full_name')?>" id="Lengkap" aria-describedby="emailHelp" >
                      <?= form_error('full_name');?>
                    </div>
                    <div class="form-group">
                      <label for="Telp">Nomor Telepon</label>
                      <input type="text" name="phone_number" class="form-control" id="Telp" aria-describedby="emailHelp" >
                      <?= form_error('phone_number'); ?>
                    </div>
                    <div class="form-group">
                      <label for="Pass">Kata Sandi</label>
                      <input type="password" name="password" id="password" class="form-control">
                      <?= form_error('password'); ?>
                      <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                      <label for="confirm_password">Konfiramasi Kata Sandi</label>
                      <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                      <?= form_error('confirm_password'); ?>
                      <div class="col-sm-5 messages"></div>
                    </div>
                  <button type="submit" class="btn btn-primary">Buat Akun</button>
                  <?= form_close()?>
                </div>
              </div>
            </div>
          </main>
          <?php $this->load->view('admin/footer')?>
        </div>
      </div>

     
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>source/vendor/sb/js/scripts.js"></script>

    <script src="<?=base_url()?>source/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         $('#dataTable').DataTable();
      });
    </script>
    </body>
</html>