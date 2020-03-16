<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="<?=base_url()?>source/icon.png">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <!-- sb admin -->
        <link href="<?=base_url();?>source/vendor/sb/css/styles.css" rel="stylesheet" />
        <!--Datatables-->
        <link rel="stylesheet" href="<?=base_url()?>source/vendor/datatables/css/jquery.dataTables.min.css">
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <!-- Font awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php $this->load->view('admin/navbar');?>
    <div id="layoutSidenav">
      <?php $this->load->view('admin/navside')?>
          <div id="layoutSidenav_content">
              <main>
                <div class="container-fluid">
                  <h1 class="mt-4">Pelelang</h1>
                  <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pelelang</li>
                  </ol>
                  <div class="card mb-4">
                      <div class="card-header"><i class="fas fa-table mr-1"></i>Status pelelang</div>
                      <div class="card-body">
                          <div class="container-fluid">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Username</th>
                                  <th width="50px">Opsi</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>Username</th>
                                  <th>Opsi</th>
                                </tr>
                              </tfoot>
                              <tbody>
                                <?php foreach($data as $row):?>
                                <tr>
                                  <td><?=$row['username']?></td>
                                  <td>
                                    <div class="dropdown">
                                      <button class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                       <i class="fas fa-ellipsis-v mr-1"></i>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?=base_url()?>/auctioneer/goods"><i class="fas fa-eye"></i> Tampilkan</a>
                                        <button class="dropdown-item" onclick="delConfirm('<?=base_url()?>admin/auctioneer_delete/<?=$row['id']?>')"><i class="fas fa-trash-alt"></i> Hapus</button>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              <?php endforeach?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                  </div>
                </main>
                <?php $this->load->view('admin/footer');?>
            </div>
        </div   >

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>source/vendor/sb/js/scripts.js"></script>
    <script src="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?=base_url()?>source/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>source/dist/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         $('#dataTable').DataTable();
      });
    </script>
    </body>
</html>