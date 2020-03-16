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
    <!-- Icheck -->    
    <link rel="stylesheet" href="<?=base_url()?>source/vendor/icheck/skins/square/green.css">
    <title>Login | LEON</title>
  </head>
  <body>
    <section class="container" style="margin-top:70px">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">
          <div class="kotak p-2" style="width: 100%">
          <div style="margin: auto; width: 150px; padding: 10px 0px">
            <img src="<?=base_url();?>source/logo-light.png?>" width="100%">
          </div>
          <div class="badan-kotak">
            <?= $msg?>
            <?= form_open('login/process')?>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Pengguna</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kata Sandi</label>
                <input name="password" type="password" class="form-control">
              </div>
              <div class="form-group">
                <input name="remember" type="checkbox" class="form-check-input custom" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingatkan saya</label>
              </div>
              <div class="row">
              <div class="col-6">
              <button type="submit" class="btn btn-leon">Masuk</button>
            </div>
            <div class="col-6" style="text-align: right;">
              <a href="<?=base_url()?>registration" style="display: inline-block;padding: .375rem .75rem ">Buat akun</a></button>
            </div>
            </div>
            <?= form_close()?>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?=base_url()?>source/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>source/vendor/icheck/icheck.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.custom').iCheck({
          checkboxClass: 'icheckbox_square-green',
          radioClass: 'iradio_square-green'
        });
      });
    </script>
  </body>
</html>