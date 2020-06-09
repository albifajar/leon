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
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- fontawesome-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <style type="text/css">
    .profile .label{
    font-weight: bolder;
    }
    .profile .label:after{
    content : ':';
    position: absolute;
    right: 0
    }
    </style>
    <!--Sweetalert2-->
    <link rel="stylesheet" href="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.min.css">
    <title>LEON</title>
  </head>
  <body>
    <nav style="background: #1f6e70;" class="navbar sticky-top navbar-dark py-md-3 py-1">
      <div class="container">
      <a class="navbar-brand" href="javascript:window.history.back()"><i class="fas fa-chevron-left"></i> Kembali</a>
    <div class="navbar-nav mr-auto">
      </div>
          <div class="dropdown">
            <button class="btn dropdown-toggle text-white text-capitalize" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$this->session->username;?>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 100px;z-index: 999; position: absolute;">
              <a class="dropdown-item" href="<?=base_url()?>user/profil"><i class="fas fa-user-alt"></i> Profile</a>
              <a class="dropdown-item" href='<?=base_url()?>user/logout'><i class="fas fa-sign-out-alt"></i> Keluar</a>
            </div>
          </div>
        </div>
    </nav>
    <section class="container mt-md-4 mt-2">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 mt-3 mb-1" style="margin-top:20px">
          <div class="card mb-2">
          <div class="card-header">
            <h5>Profil</h5>
          </div>
            <div class="cover-kotak" style="max-height: 350px; overflow-y: hidden;">
              <div  style="margin: 30px auto; width: 200px;" class="d-none">
                <img src="<?=base_url()?>uploads/<?= $data['foto']?>" width="100%">
              </div>
            </div>
            <div class="card-body">
              <div class="row profile" data-ride="carousel">
                <div class="col-3 label">Nama</div>
                <div class="col-9"><?= $data['nama_lengkap']?></div>
                <div class="col-3 label">Username</div>
                <div class="col-9"><?= $data['username']?></div>
                <div class="col-3 label">Password</div>
                <div class="col-9">********</div>
                <div class="col-3 label">No Hp</div>
                <div class="col-9"><?= $data['telp']?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-7" style="margin-top:20px">
          <div class="card mb-4">
          <div class="card-header">
            <h5>Lelang yang di ikuti</h5>
          </div>
            <div class="cover-kotak" style="max-height: 350px; overflow-y: hidden;">
              <div  style="margin: 30px auto; width: 200px;" class="d-none">
                <img src="<?=base_url()?>uploads/<?= $data['foto']?>" width="100%">
              </div>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" width="50px">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col" width="200px">Pengaju tertinggi</th>
                  <th scope="col" class="text-center"><i class="fas fa-ellipsis-v mr-1"></i></th>
                </tr>
              </thead>
              <tbody>
                  <?php $i=1;foreach ($history as $row ):?>
                <tr>
                  <th scope="row" class="text-center"><?=$i?></th>
                  <td>
                    <?php if($row['username'] !== $data['username'] || $row['status'] !== 'berakhir'):?>
                    <a href="<?=base_url()?>user/goods/<?= $row['id_barang']?>"><?= $row['nama_barang']?></a>
                    <?php else:?>
                      <?= $row['nama_barang']?>
                    <?php endif?>
                  </td>
                  <td class="d-none"><span class="<?= $row['status'] == 'buka'? 'text-success' : 'text-danger'?>"><?= $row['status']?></span></td>
                  <td><?= $row['username'] == $data['username'] ? '<b>Anda</b>' : $row['username']?>
                                      <!-- Button trigger modal -->
                  <td>
                  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal<?=$i?>"><i class="fas fa-angle-right"></i></a>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">                
                          <div class="row profile" data-ride="carousel">
                            <div class="col-4 label">Nama</div>
                            <div class="col-8">                    
                              <?php if($row['username'] !== $data['username']):?>
                              <a href="<?=base_url()?>user/goods/<?= $row['id_barang']?>"><?= $row['nama_barang']?></a>
                              <?php else:?>
                                <?= $row['nama_barang']?>
                              <?php endif?> 
                            </div>
                            <div class="col-4 label">Username</div>
                            <div class="col-8"><?= $row['username'] == $data['username'] ? 'Anda' : $row['username']?></div>
                            <div class="col-4 label">Harga Akhir</div>
                            <div class="col-8"><?= $row['harga_akhir']?></div>
                            <div class="col-4 label">Tanggal Akhir</div>
                            <div class="col-8"><?= $row['tanggal_akhir']?></div>
                            <div class="col-4 label">Status</div>
                            <div class="col-8"><span class="<?= $row['status'] == 'buka'? 'text-success' : 'text-danger'?>"><?= $row['status']?></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </td>
                  </td>
                </tr>
                <?php $i++;endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $this->load->view('user/footer')?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
  <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>source/vendor/cleave.min.js"></script>
  <script src="<?=base_url()?>source/vendor/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="<?=base_url()?>source/dist/js/script.js"></script>
</body>
</html>