<?php if($on == 'goods'):?>
<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-dark fixed-top py-1">
  <a class="navbar-brand" href="javascript:window.history.back()"><img src="<?=base_url()?>source/img/left.png" width="100px"></a>
<?php else:?>
<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-light py-1">
  <a class="navbar-brand" href="#"><img src="<?=base_url()?>source/logo-dark.png" width="100px"></a>
<?php endif;?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
    </div>
      <div class="nav-item">
        <a class="btn btn text-white nav-link" href="<?=base_url()?>registration">Daftar</a>
      </div>
      <div class="d-md-block d-none" style="border: 0.8px solid #fff; height: 30px;margin: 0 10px"></div>
      <div class="nav-item">
        <a class="btn text-white nav-link" href="<?=base_url()?>login">Masuk</a>
      </div>
  </div>
</nav>