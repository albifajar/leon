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
    <!--Datatables-->
    <link rel="stylesheet" href="<?=base_url()?>source/vendor/datatables/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <title>LEON</title>
  </head>
  <body>

 <?php $this->load->view('auctioneer/navbar');?>
 <main>
  <div class="container mt-4">
    <div class="card mb-4">
      <div class="card-header" style="background: #fafafa;">
      	<div class="row">
      	<div class="col"><i class="fas fa-list"></i> Barang Lelang</div>
      	<div class="col text-right"><a href="<?= base_url()?>auctioneer/goods_create" class="btn btn-leon"><i class="fas fa-notes-medical"></i> Tambah Barang</a></div>
      </div>
  </div>
      <div class="card-body">
    <div class="table-responsive">
   <table class="table" id="dataTable">
     <thead>
       <tr>
         <th>Nama Barang</th>
         <th>Status</th>
         <th class="text-center" width="30px">Opsi</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>TEko</td>
         <td>TEko</td>
         <td class="text-center">         
          <div class="dropdown">
            <button class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-ellipsis-v mr-1"></i>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="<?=base_url()?>/auctioneer/goods"><i class="fas fa-eye"></i> Tampilkan</a>
              <a class="dropdown-item" href=""><i class="fas fa-edit"></i> Ubah</a>
              <a class="dropdown-item" href=""><i class="fas fa-trash-alt"></i> Hapus</a>
            </div>
          </div>
        </td>
       </tr>
     </tbody>
   </table>
 </div>
</div>
</div>
</div>
 </main>
  <footer class="footer mt-5">
    copyright <sup>&copy</sup> 2020 | <span class="created">Created By Alfarama</span>
  </footer>
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