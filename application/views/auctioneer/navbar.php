<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-dark py-1">
  <div class="container">
    <a class="navbar-brand" href=""><img src="<?=base_url()?>source/logo-dark.png" width="100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto">
      </div>
      <div class="nav-item mr-3">
        <div class="dropdown">
          <button class="btn dropdown-toggle text-white text-capitalize" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?=$this->session->username?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 100px">
            <a class="dropdown-item d-none" href="#"><i class="fas fa-user-alt"></i> Profile</a>
            <a class="dropdown-item" href="<?=base_url()?>auctioneer/logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>