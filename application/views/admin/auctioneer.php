<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">LEON<small> Admin</small></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
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
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Username</th>
                                  <th>Status</th>
                                  <th>Opsi</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>Username</th>
                                  <th>Status</th>
                                  <th>Opsi</th>
                                </tr>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td>Tiger Nixon</td>
                                  <td>System Architect</td>
                                  <td>
                                    <div class="dropdown">
                                      <button class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                       <i class="fas fa-ellipsis-v mr-1"></i>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?=base_url()?>/auctioneer/goods"><i class="fas fa-eye"></i> Tampilkan</a>
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div   >

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url();?>source/vendor/sb/js/scripts.js"></script>

    <script src="<?=base_url()?>source/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         $('#dataTable').DataTable();
      });
    </script>
    </body>
</html>