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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <title>LEON</title>
    <style type="text/css">
    	.judul-link{
    		color: black;
    	}
    	.judul-link:hover{
    		color: black;
    	}
    </style>
  </head>
  <body>
<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-dark py-2">
  <div class="container">
  <a class="navbar-brand" href=""><img src="<?=base_url()?>source/logo-dark.png" width="100px"></a>
	<?php if($this->session->level !== 'user'):?>
	  <div class="" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto">
      </div>
	      <div class="d-inline-block">
	        <a class="btn btn text-white nav-link" href="<?=base_url()?>registration">Daftar</a>
	      </div>
	      <div class="d-inline-block border-left">
	        <a class="btn text-white nav-link" href="<?=base_url()?>login">Masuk</a>
	      </div>
	  </div>
	<?php else:?>
	  <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
	  </div>
	<?php endif;?>
</div>
</nav>
<nav style="background: #1f6e70;" class="navbar navbar-expand-lg navbar-dark sticky-top py-1">
  <div class="container">
  <a class="navbar-brand" href="<?= base_url()?>">Beranda</a>
  <a class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-caret-down text-white"></i>
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" id="navCats">
      <?php foreach($cats as $cat):?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>?cat=<?= $cat['slug']?>" tabindex="-1" aria-disabled="true"><?= $cat['nama']?></a>
      </li>
    <?php endforeach;?>
    </ul>
    <?php if($this->session->username):?>
    <div class="navbar-nav mr-auto">
      </div>
          <div class="dropdown">
            <button class="btn dropdown-toggle text-white text-capitalize" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$this->session->username;?>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 100px;z-index: 999; position: absolute;">
              <a class="dropdown-item" href="<?=base_url()?>user/profil"><i class="fas fa-user-alt"></i> Profile</a>
              <a class="dropdown-item" href='<?=base_url()?>user/logout'><i class="fas fa-sign-out-alt"></i> Keluar</a>
            </div>
          </div>
        <?php endif;?>
  </div>
</div>
</nav>
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
<section class="container mt-4">
	<div class="row px-0" id="items">
    <div class="col-6 col-md-4 col-lg-3 mt-5" v-for="item in items" style="display: grid; flex-direction: column;">
      <div class="kotak i" style="width: 100%;">
        <a v-bind:href="'<?=base_url()?>user/goods/'+item.id">
          <div class="cover-kotak text-center">
            <figure class="img-thumbnail" style="height: 200px; width: 100%;">
              <img v-bind:src="'<?=base_url()?>uploads/'+item.gambar" width="100%;" v-bind:alt="item.nama">
            </figure>
          </div>
        </a>
        <div class="badan-kotak">
          <div class="judul">
            <a class="judul-link" v-bind:href="'<?=base_url()?>user/goods/'+item.id">{{ item.nama }}</a>
          </div>
          <div class="harga mt-2">{{ item.harga }}</div>
        </div>
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
    <script type="text/javascript">
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path

        function parseURLParams(url) {
        var queryStart = url.indexOf("?") + 1,
            queryEnd   = url.indexOf("#") + 1 || url.length + 1,
            query = url.slice(queryStart, queryEnd - 1),
            pairs = query.replace(/\+/g, " ").split("&"),
            parms = {}, i, n, v, nv;

        if (query === url || query === "") return;

        for (i = 0; i < pairs.length; i++) {
            nv = pairs[i].split("=", 2);
            n = decodeURIComponent(nv[0]);
            v = decodeURIComponent(nv[1]);

            if (!parms.hasOwnProperty(n)) parms[n] = [];
            parms[n].push(nv.length === 2 ? v : null);
        }
        return parms;
    }
    var urlGet = "<?=base_url()?>"+"user/get_goods";
    if(parseURLParams(path) !== undefined){
    urlGet = "<?=base_url()?>"+"user/get_goods?cat="+parseURLParams(path).cat[0];
    
    }
        $("#navCats .nav-item a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });
    var apps;
    $(function() {
        loopdata();

        function loopdata() {
            setTimeout(loopdata, 10000);
            $.ajax({
                url: urlGet,
                success: function(result) {
                    apps = new Vue({
                        el: '#items',
                        data: {
                            items: JSON.parse(result)
                        }
                    });
                }
            });
        }
    });
    </script>
  </body>
</html>