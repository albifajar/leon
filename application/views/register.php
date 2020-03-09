<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>source/bootstrap-4.3.1/css/bootstrap.min.css">
    <!-- My Style -->
    <link rel="stylesheet" href="<?=base_url()?>source/dist/css/user.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <style type="text/css">
    .messages{
      font-size: 9pt;
      margin-top: 6px;
      color: #e43;
    }
  </style>

    <script src="<?=base_url()?>source/vendor/validate.min.js"></script>
    <title>Registration | LEON</title>
  </head>
  <body>
    <section class="container-fluid">
      <div class="row">
      <div class="col-12 col-md-6 my-3" style="margin-top:20px">
          <div class="container">
          <div class="mx-auto mx-md-0" style="width: 130px; padding: 10px 0px 20px ">
            <img src="<?=base_url();?>/source/logo-light.png?>" width="100%">
          </div>
            <?= form_open("registration", array("id"=>'main'))?>
              <div class="form-group">
                <label for="Pengguna">Nama Pengguna</label>
                <input type="text" value="<?=set_value('username')?>" name="username" class="form-control" id="Pengguna" aria-describedby="emailHelp">
                <div class="messages"><?= form_error('username'); ?></div>
              </div>
              <div class="form-group">
                <label for="Lengkap">Nama Lengkap</label>
                <input type="text" value="<?=set_value('full_name')?>" name="full_name" class="form-control" id="Lengkap" aria-describedby="emailHelp" >
                <div class="messages"><?= form_error('full_name');?></div>
              </div>
              <div class="form-group">
                <label for="Telp">Nomor Telepon</label>
                <input type="text" value="<?=set_value('phone_number')?>" name="phone_number" class="form-control" id="Telp" aria-describedby="emailHelp" >
                <div class="messages"><?= form_error('phone_number');?></div>
              </div>
              <div class="form-group">
                <label for="Pass">Kata Sandi</label>
                <input type="password" name="password" id="password" class="form-control">
                <div class="messages"><?= form_error('password'); ?></div>
              </div>
              <div class="form-group">
                <label for="confirm_password">Konfiramasi Kata Sandi</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                <div class="messages"><?= form_error('confirm_password'); ?></div>
              </div>
            <button type="submit" class="btn btn-leon">Submit</button>
            <?= form_close()?>
              <div class="text-right mt-3">
                <a href="<?=base_url()?>login">Sudah punya akun</a>
              </div>
              <div class="d-block mt-2 text-right">
                <a href="<?=base_url()?>">Kembali ke beranda</a>
              </div>
          </div>
        </div>
<!--       <div class="col-md-6 d-none d-md-block" style="height: 100vh; background-image: url('<?=base_url()?>source/img/1.jpg'); background-repeat: no-repeat; background-size: 100%;position: fixed; right: 0px">
      </div> -->
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <!--<script src="<?=base_url()?>source/dist/js/register.js">
    </script>-->
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>