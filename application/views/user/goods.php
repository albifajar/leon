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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <title>LEON</title>
  </head>
  <body>
    <nav style="background: #1f6e70;" class="navbar navbar-dark py-1">
    <a class="navbar-brand" href="<?=base_url()?>"><i class="fas fa-chevron-left"></i></a>
  </nav>
<section class=" container" style="margin-top: 60px">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 my-3" style="margin-top:20px">
        <div class="card mb-4">
          <div class="card-header" style="background: #fafafa;"><?=$data['nama']?></div>
            <div class="card-body">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

<!--       <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 bg-danger"  src="<?=base_url()?>source/logo.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 bg-warning" src="<?=base_url()?>source/logo.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 bg-primary"  src="<?=base_url()?>source/logo.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->
                  <div style="padding: 7px 2px"><label style="margin-right: 22px; font-weight: 650">Nama barang</label>: <?=$data['nama']?></div>
                  <div style="padding: 7px 2px"><label style="margin-right: 5px; font-weight: 650">Harga Tertinggi</label>: Rp. <?=$data['harga']?></div>
                </div>
                <div class="mt-2">
                  <label style="margin-right: 54px;font-weight: 650">Deskripsi</label> : 
                  <div style="padding: 10px 7px; margin-top: 5px; max-height: 150px; overflow-y: auto; text-align: justify;">
                    <?=$data['deskripsi']?>
                  </div>
                </div>

           <?php if($this->session->level !== 'user'):?>
                <div class="text-center mt-5">
            <p>Ingin mengajukan harga ?</p>
                  <a href="<?=base_url()?>login">Masuk<a>
                   | 
                  <a href="<?=base_url()?>registration">Daftar<a>
                </div>
                </form>
              <?php else:?>
              <form class="mt-5">
                <div class="form-group">
                  <label for="Deskripsi" style="font-weight: 700px">Ajukan harga</label>
                  <div class="input-group mb-3">
                      <div class="input-group-prepend" id="button-addon3">
                        <span class="input-group-text">Rp. </span>
                      </div>
                    <input type="text" class="form-control" placeholder="0" 
                    id="prince" maxlength="26" aria-describedby="button-addon2">
                    <input type="hidden" name="id" value="<?=$data['id']?>">
                    <div class="input-group-append">
                      <button class="btn btn-leon" type="button" id="button-addon2">Ajukan</button>
                    </div>
                  </div>
                  </div>

              <?php endif?>
                </div>
            </div>
          </div>
</section>
<?php $this->load->view('user/footer')?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>source/vendor/jquery.maskMoney.min.js"></script>
    <script type="text/javascript">
      $("#prince").maskMoney();
    </script>
  </body>
</html>