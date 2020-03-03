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
    <title>Registration | LEON</title>
  </head>
  <body>
    <section class="container-fluid">
      <div class="row">
      <div class="col-12 col-md-6 my-3" style="margin-top:20px">
          <div class="container">
          <div class="mx-auto mx-md-0" style="width: 150px">
            <img src="<?=base_url();?>/source/logo.png?>" width="100%">
          </div>
            <form class="mt-4">
              <div class="form-group">
                <label for="Pengguna">Nama Pengguna</label>
                <input type="text" class="form-control" id="Pengguna" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="Lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="Lengkap" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="Telp">Nomor Telepon</label>
                <input type="text" class="form-control" id="Telp" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="Pass">Kata Sandi</label>
                <input type="password" id="Pass" class="form-control">
              </div>
              <div class="form-group">
                <label for="confrimPass">Konfiramasi Kata Sandi</label>
                <input type="password" id="confrimPass" class="form-control">
              </div>
              <button type="submit" class="btn btn-leon">Daftar</button>
              <div class="text-right mt-3">
                <a href="<?=base_url()?>login">Sudah punya akun</a>
              </div>
              <div class="d-block mt-2 text-right">
                <a href="<?=base_url()?>">Kembali ke beranda</a>
              </div>
            </form>
          </div>
        </div>
      <div class="col-md-6 d-none d-md-block" style="height: 100vh; background-image: url('<?=base_url()?>source/img/1.jpg'); background-repeat: no-repeat; background-size: 100%;position: fixed; right: 0px">
      </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>