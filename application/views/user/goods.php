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
    <!--Sweetalert2-->
    <link rel="stylesheet" href="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.min.css">
    <title>LEON</title>
  </head>
  <body>
    <nav style="background: #1f6e70;" class="navbar sticky-top navbar-dark py-md-3 py-1">
    <a class="navbar-brand" href="javascript:window.history.back()"><i class="fas fa-chevron-left"></i></a>
  </nav>
<section class="container mt-md-4 mt-2">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 my-3" style="margin-top:20px">
        <div class="card mb-4">
        <div class="cover-kotak" style="max-height: 350px; overflow-y: hidden;">
          <img src="<?=base_url()?>uploads/<?=$data['gambar']?>" width="100%;" style="margin-top: -50px">
          </div>  
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
                  <div style="padding: 7px 2px"><label style="margin-right: 5px; font-weight: 650">Harga Tertinggi</label>: Rp. <span class="uang"><?=$data['harga']?></span></div>
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
              <form class="mt-5" method="post">
                <div class="form-group">
                  <label for="Deskripsi" style="font-weight: 700px">Ajukan harga</label>
                  <div class="input-group mb-3">
                      <div class="input-group-prepend" id="button-addon3">
                        <span class="input-group-text">Rp. </span>
                      </div>
                    <input type="text" class="form-control" placeholder="0" 
                    id="prince" maxlength="26" name="prince" aria-describedby="button-addon2">
                      <button class="btn btn-leon" type="submit" id="button-addon2">Ajukan</button>
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
    <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>source/vendor/cleave.min.js"></script>
    <script src="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?=base_url()?>source/dist/js/script.js"></script>
    <script type="text/javascript">
      <?php if($this->session->status == 'success'):?>
          alertToast('success', 'Harga berhasil di ajukan');
      <?php elseif($this->session->status == 'error'):?>
          alertToast('error', 'Harga gagal di ajukan');
      <?php endif;  $this->session->unset_userdata('status');?>



var cleave = new Cleave($("#prince"), {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
});



      // $("#prince").maskMoney({allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
      $('form').submit(function(){

      let uang = parseInt($('span.uang').text().split(',')[0].split('.').join(""));
      let uangInput = parseInt($('input').val().split(',').join(""));
  if(uang < uangInput){
    return true;
  }else{
      alertToast('warning', 'Harga yang di ajukan harus lebih tinggi');
    return false;
  }
})
    </script>
  </body>
</html>