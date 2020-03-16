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
<nav style="background: #1f6e70;" class="navbar navbar-expand-md navbar-dark py-2">
  <a class="navbar-brand" href=""><img src="<?=base_url()?>source/logo-dark.png" width="100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<?php if($this->session->level !== 'user'):?>
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
	<?php else:?>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <div class="navbar-nav mr-auto">
	    </div>
	      <div class="nav-item mr-3">
	        <div class="dropdown">
	          <button class="btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            <?=$this->session->username;?>
	          </button>

	          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 100px;">
	            <a class="dropdown-item" href="#"><i class="fas fa-user-alt"></i> Profile</a>
	            <a class="dropdown-item" href='<?=base_url()?>user/logout'><i class="fas fa-sign-out-alt"></i> Keluar</a>
	          </div>
	        </div>
	      </div>
	  </div>
	<?php endif;?>
</nav>
<section class="container mt-4">
	<div class="row">
		<?php foreach($data as $row):?>
		<div class="col-12 col-md-6 col-lg-4 mt-5">
			<a href="<?=base_url()?>user/goods/<?=$row['id']?>">
			<div class="kotak" style="width: 18rem; margin: auto; display: block;">
				<div class="cover-kotak">
					<img src="<?=base_url()?>uploads/<?=$row['gambar']?>" width="100%;">
				</div>
				<div class="badan-kotak">
					<div class="judul"><?=$row['nama']?></div>
					<div class="harga"><?=$row['harga']?></div>
				</div>
			</div>
			</a>
		</div>
	<?php endforeach;?>
</section>
<?php $this->load->view('user/footer')?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>