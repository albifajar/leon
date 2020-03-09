<?php if($on == 'goods'):?>
<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-dark fixed-top py-1">
  <a class="navbar-brand" href="javascript:window.history.back()"><img src="<?=base_url()?>source/img/left.png"></a>
<?php else:?>
<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-dark py-2">
  <a class="navbar-brand" href=""><img src="<?=base_url()?>source/logo-dark.png" width="120px"></a>
<?php endif;?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
    </div>
      <div class="nav-item mr-3">
        <div class="dropdown">
          <button class="btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=$username;?>
          </button>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href='<?=base_url()?>user/logout'>Keluar</a>
          </div>
        </div>
      </div>
  </div>
</nav>