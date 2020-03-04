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
    <title>Create new data | LEON</title>
  </head>
  <body>
  	<nav style="background: #1f6e70;" class="navbar navbar-dark py-1">
	  <a class="navbar-brand" href="<?=base_url()?>auctioneer"><img src="<?=base_url()?>source/img/left.png"></a>
	</nav>
    <section class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-3" style="margin-top:20px">
          <div class="container">
		    <div class="card mb-4">
	    	  <div class="card-header" style="background: #fafafa;"><i class="fas fa-table mr-1"></i>Tambah Barang</div>
	      	  <div class="card-body">
	            <form class="mt-4">
	              <div class="form-group">
	                <label for="barang">Nama Barang</label>
	                <input type="text" class="form-control" id="barang" aria-describedby="emailHelp" >
	              </div>
	              <div class="form-group">
	                <label for="harga">Harga Barang</label>
	                <input type="text" class="form-control" id="harga" aria-describedby="emailHelp" >
	              </div>
	              <div class="form-group">
	                <label for="Deskripsi">Deskripsi</label>
	                <textarea id="Deskripsi" class="form-control"></textarea>
	              </div>
	              <button type="submit" class="btn btn-leon">Tambahkan</button>
	              <button type="submit" class="btn mt-sm-0 mt-3 btn-leon">Tambah & aktifkan</button>
	            </form>
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
  </body>
</html>
