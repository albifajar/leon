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

    <link rel="stylesheet" href="<?=base_url()?>source/vendor/datatables/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <title>Create new data | LEON</title>
  </head>
  <body>
  	<nav style="background: #1f6e70;" class="navbar navbar-dark py-1">
	  <a class="navbar-brand" href="javascript:window.history.back()"><i class="fas fa-chevron-left"></i></a>
	</nav>
    <section class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 my-3" style="margin-top:20px">
          <div class="container">
		    <div class="card mb-4">
	    	  <div class="card-header" style="background: #fafafa;">Barang</div>
	      	  <div class="card-body">
	            <form class="mt-4">
	              <div class="form-group">
	                <label for="barang">Nama Barang</label>
	                <input type="text" class="form-control" id="barang" aria-describedby="emailHelp" >
	              </div>
	              <div class="form-group">
	                <label for="harga">Harga Akhir</label>
	                <input type="text" class="form-control" id="harga" aria-describedby="emailHelp" >
	              </div>
	              <div class="form-group">
	                <label for="Deskripsi">Deskripsi</label>
	                <textarea id="Deskripsi" class="form-control"></textarea>
	              </div>
	              <div class="form-group">
	                <label for="Deskripsi">Status</label>
	                <input type="text" class="form-control" id="harga" aria-describedby="emailHelp" >
	              </div>
	            </form>
	          </div>
	        </div>
			<div class="card">
			  <div class="card-header">Riwayat pengajuan</div>
			  <div class="card-body">
				<div class="table-responsive">
				   <table class="table" id="dataTable">
				     <thead>
				       <tr>
				         <th>Jam/Tanggal</th>
				         <th>Nama</th>
				         <th>Harga</th>
				       </tr>
				     </thead>
				     <tbody>
				       <tr>
				         <td>12:15/12-15-2001</td>
				         <td>TEko</td>
				         <td>Rp 200.000</td>
				       </tr>
				     </tbody>
				   </table>
				</div>
			  </div>
			</div>
    	</div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>source/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         $('#dataTable').DataTable();
      });
    </script>
  </body>
</html>