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
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- fontawesome-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <!--Sweetalert2-->
    <link rel="stylesheet" href="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.min.css">
    <style type="text/css">
      
  figure.img-thumbnail img{
    height: 100%;
    max-width: 100%;
    width: auto;
    display: inline-block;
    -o-object-fit: cover;
    object-fit: cover;
  }
    </style>
    <title>LEON</title>
  </head>
  <body>
    <nav style="background: #1f6e70;" class="navbar sticky-top navbar-dark py-md-3 py-1">
      <a class="navbar-brand" href="javascript:window.history.back()"><i class="fas fa-chevron-left"></i></a>
    </nav>
    <section class="container mt-md-4 mt-2">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 my-3" style="margin-top:20px">
          <div class="card mb-4" id="item">
            <div class="cover-kotak" style="max-height: 350px; overflow-y: hidden;">
              <figure class="thumbnail" style="height: 200px; width: 100%;">
                <img v-bind:src="gambar" width="100%">
              </figure>
            </div>
            <div class="card-body">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div style="padding: 7px 2px"><label style="margin-right: 22px; font-weight: 650">Nama barang</label>: {{ nama }}</div>
                <div style="padding: 7px 2px"><label style="margin-right: 5px; font-weight: 650">Harga Tertinggi</label>: Rp. <span class="uang">{{ harga }}</span></div>
              </div>
              <div class="mt-2">
                <label style="margin-right: 54px;font-weight: 650">Deskripsi</label> :
                <div style="padding: 10px 7px; margin-top: 5px; max-height: 150px; overflow-y: auto; text-align: justify;">{{ deskripsi }}
                </div>
              </div>
              <?php if($this->session->level !== 'user'):?>
              <div class="text-center mt-5">
                <p>Ingin mengajukan harga ?</p>
                <a href="<?=base_url()?>login">Masuk</a>
                  |
                  <a href="<?=base_url()?>registration">Daftar</a>
                  </div>
                <?php else:?>
                <?php endif?>
                </div>
              </div>
                <form class="mt-2" method="post">
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
                </form>
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
        
        <script type="text/javascript">

        const id = window.location.href.split("/")[window.location.href.split("/").length - 1];
        var app;
        $(function() {
            loopdata();

            function loopdata() {
                setTimeout(loopdata, 10000);
                $.ajax({
                    url: "http://127.0.0.1/leon/user/get_goods/" + id,
                    success: function(result) {
                  //    console.log(result);
                    app = new Vue({
                    el: '#item',
                    data: JSON.parse(result)
                  });
                    app.gambar = "<?=base_url()?>uploads/"+app.gambar

                  } 
                });
            }
        });


        </script>
      </body>
    </html>