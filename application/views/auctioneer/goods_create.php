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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <title>Create new data | LEON</title>
  <style type="text/css">
    .messages{
      font-size: 9pt;
      margin-top: 6px;
      color: #e43;
    }
  </style>
  </head>
  <body>
  	<nav style="background: #1f6e70;" class="navbar navbar-dark py-1">
	  <a class="navbar-brand" href="<?=base_url()?>auctioneer"><i class="fas fa-chevron-left"></i></a>
	</nav>
    <section class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-3" style="margin-top:20px">
          <div class="container">
		    <div class="card mb-4">
	    	  <div class="card-header" style="background: #fafafa;"><i class="fas fa-notes1-medical"></i> Tambah Barang</div>
	      	  <div class="card-body">
              <?= form_open("auctioneer/goods_create")?>
	              <div class="form-group">
	                <label for="barang">Nama Barang</label>
	                <input type="text" name="name_goods" class="form-control" id="barang" aria-describedby="emailHelp" >
                <div class="messages"><?= form_error('name_goods');?></div>
	              </div>
	              <div class="form-group">
	                <label for="prince">Harga Barang</label>
	                <input type="text" name="prince" class="form-control" id="prince" aria-describedby="emailHelp" >
                <div class="messages"><?= form_error('prince');?></div>
	              </div>
	              <div class="form-group">
	                <label for="Deskripsi">Deskripsi</label>
	                <textarea id="Deskripsi" name="description" class="form-control"></textarea>
                <div class="messages"><?= form_error('description');?></div>

	              </div>
	              <button type="submit" name="tambahkan" class="btn btn-leon">Tambahkan</button>
	              <button type="submit" class="d-none btn mt-sm-0 mt-3 btn-leon">Tambah & aktifkan</button>
            <?= form_close()?>
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
    <script src="<?=base_url()?>source/vendor/jquery.maskMoney.min.js"></script>
    <script type="text/javascript">
      $("#prince").maskMoney();
    </script>
  </body>
</html>
