<?php $s=$goods['status']?>
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
  <!--Sweetalert2-->
  <link rel="stylesheet" href="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.min.css">

  <link rel="stylesheet" href="<?=base_url()?>source/vendor/datatables/css/jquery.dataTables.min.css">
  <style type="text/css">
   input.leon-checkbox{
    position: relative;
    width: 40px;
    height: 20px;
    -webkit-appearance: none;
    appearance: none;
    background-color: #c6c6c6;
    outline: none;	
    border-radius: 10px;
    box-shadow: inset 0 0 5px rgba(0,0,0,.2);
    transition: .5s;
  }
  input:checked.leon-checkbox{
    background-color: #1f6eff;
    outline: none;	
    box-shadow: inset 0 0 5px rgba(255,255,255,.2);
  }
  input.leon-checkbox:before{
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 10px;
    top: 0;
    left: 0;
    background-color: #fff;
    box-shadow: 1px 5px 5px rgba(0,0,0,.2);
    transform: scale(1.1);
    transition: 0.5s;
  }
  input:checked.leon-checkbox:before{
    left: 20px;
  }
  .leon-config{
    display: inline;
    cursor: pointer;
    color: #1f6eff;
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<title>View <?= $goods['nama_barang']?> | LEON</title>
</head>
<body style="max-width: 100%; overflow-x: hidden;">
 <nav style="background: #1f6e70;" class="navbar navbar-dark py-1">
   <a class="navbar-brand" href="javascript:window.history.back()"><i class="fas fa-chevron-left"></i></a>
 </nav>
 <section class="conta\iner-fluid">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 my-3" style="margin-top:20px">
      <div class="container">
        <div class="card mb-4">
          <div class="card-header" style="background: #fafafa;">Barang</div>
          <div class="card-body">
           <div class="form-group">
             <label for="barang">Nama Barang</label>
             <div class="form-control text-capitalize"><?= $goods['nama_barang']?></div>
           </div>
           <div class="form-group">
             <label for="harga">Harga Akhir</label>
             <div class="form-control"><?= $goods['harga_akhir']?></div>
           </div>
           <div class="form-group">
             <label for="Deskripsi">Deskripsi</label>
             <div class="form-control" style="height: 100px"><?= $goods['deskripsi']?></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
 <script src="<?=base_url()?>source/vendor/datatables/js/jquery.dataTables.min.js"></script>
 <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
 <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
 <script src="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.all.min.js"></script>
 <script src="<?=base_url()?>source/dist/js/script.js"></script>
 <script type="text/javascript">    
  <?php if($msg = $this->session->massage):?>
    successProsess('<?=$msg?>');
  <?php endif;
  $this->session->unset_userdata('massage');
  ?>
  $(document).ready(function() {
   $('#dataTable').DataTable();	
 });
  $('form').submit(function(e){
	//	  return confirm('adsa');
  if($('#status').text() !== $('#status-conf').attr('data-defst')){
    e.preventDefault();
    Swal.fire({
      title: 'Apa kamu yakin?',
      text: "Dengan perubahan yang telah di lakukan",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if(result.value) {
       $(this).unbind('submit').submit();
     }

   });
  }else{
    e.preventDefault();
  }
});
  $('#status-conf').click(function(){ let s = $('#status-conf:checked').val(); if(s == "on"){  $('span#status').html('<span class="text-success text-capitalize" style="margin-left: 6px;">buka</span>')} if(s == undefined){  $('span#status').html('<span class="text-danger text-capitalize">tutup</span>')}})
</script>
</body>
</html>