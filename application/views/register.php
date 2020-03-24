<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?=base_url()?>source/icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>source/bootstrap-4.3.1/css/bootstrap.min.css">
    <!-- My Style -->
    <link rel="stylesheet" href="<?=base_url()?>source/dist/css/user.css">

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
            <?= form_open("registration", array("id"=>"form"))?>
              <div class="form-group">
                <label for="Pengguna">Nama Pengguna</label>
                <input type="text" value="<?=set_value('username')?>" name="username" class="form-control" id="Pengguna" minlength="3" maxlength="50" required>
                <div class="messages"><?= form_error('username'); ?></div>
              </div>
              <div class="form-group">
                <label for="Lengkap">Nama Lengkap</label>
                <input type="text" value="<?=set_value('full_name')?>" name="full_name" class="form-control" id="Lengkap" minlength="3" maxlength="50" required>
                <div class="messages"><?= form_error('full_name');?></div>
              </div>
              <div class="form-group">
                <label for="Telp">Nomor Telepon</label>
                <input type="number" value="<?=set_value('phone_number')?>" name="phone_number" class="form-control" id="Telp" aria-describedby="emailHelp" minlength="11" maxlength="13"  required>
                <div class="messages"><?= form_error('phone_number');?></div>
              </div>
              <div class="form-group">
                <label for="Pass">Kata Sandi</label>
                <input type="password" name="password" value="<?=set_value('password')?>" id="password" class="form-control" minlength="8" maxlength="16"  required>
                <div class="messages"><?= form_error('password'); ?></div>
              </div>
              <div class="form-group">
                <label for="confirm_password">Konfiramasi Kata Sandi</label>
                <input type="password" value="<?=set_value('confirm_password')?>" id="confirm_password" name="confirm_password" class="form-control" minlength="8" maxlength="16" required>
                <div class="messages"><?= form_error('confirm_password'); ?></div>
              </div>
            <button type="submit" class="btn btn-leon">Submit</button>
            <?= form_close()?>
              <div class="text-right mt-3">
                Sudah punya akun? <a href="<?=base_url()?>login">Login</a>
                 | 
                Kembali ke <a href="<?=base_url()?>"> beranda</a>
              </div>
          </div>
        </div>
      <div class="col-md-6 d-none d-md-block ilustration">
        <span style="position: absolute; bottom: 100px; right: 20px">Ilustration by <a href="https://undraw.co/illustrations">undraw.co</a></span>
      </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <!-- <script src="<?=base_url()?>source/dist/js/register.js">
    </script> -->
    <script src="<?=base_url()?>source/vendor/jquery-validation-1.19.1/jquery.validate.min.js">
    </script>
    <script src="<?=base_url()?>source/vendor/jquery-validation-1.19.1/localization/messages_id.min.js">
    </script>
    
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //$("#form").validate();
        $("#form").validate({
      rules: {
        confirm_password: {
          equalTo: "#password"
        }
      },
      messages: {
        confirm_password: {
          equalTo: "Konfiramasi Kata Sandi tidak sama"
        }
      }
      });
      });
    </script>
  </body>
</html>