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
        <link href="<?=base_url();?>source/vendor/sb/css/styles.css" rel="stylesheet" />
        <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php $this->load->view('admin/navbar')?>
        <div id="layoutSidenav">
            <?php $this->load->view('admin/navside')?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-table mr-1"></i>Barang Lelang</div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Waktu</th>
                                                        <th>Nama</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Nama</th>
                                                    <th>Status</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php for ($i=0; $i < 5; $i++): ?>
                                                    <tr>
                                                        <td><?= $goods[$i]['waktu']?></td>
                                                        <td><?= $goods[$i]['nama_barang']?></td>
                                                        <td><?= $goods[$i]['status']?></td>
                                                    </tr>
                                                    <?php endfor;?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div></div>
                                <div class="col-xl-3 col-md-6">
                                    
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    Jumlah Barang
                                                </div>
                                                <div class="col text-right">
                                                    <span class="bold"><?=count($goods)?></span>
                                                </div>
                                            </div>
                                        </div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="<?=base_url()?>admin/goods">Detail</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <?php $this->load->view('admin/footer')?>
                        </div>
                    </div>
                    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
                    <script src="<?=base_url();?>source/vendor/sb/js/scripts.js"></script>
                </body>
            </html>