<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?=base_url()?>source/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>source/bootstrap-4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
      <div class="container">
        <a class="navbar-brand" href="<?=base_url()?>auctioneer"><i class="fas fa-chevron-left"></i> Kembali</a>
      </div>
    </nav>
    <section class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-3" style="margin-top:20px">
          <div class="container">
            <div class="card mb-4">
              <div class="card-header" style="background: #fafafa;"><i class="fas fa-notes1-medical"></i> Tambah Barang</div>
              <div class="card-body">
                <?= form_open_multipart("auctioneer/goods_create")?>
                <div class="form-group">
                  <label for="barang">Nama Barang</label>
                  <input type="text"  value="<?=set_value('name_goods')?>" name="name_goods" class="form-control" id="barang" aria-describedby="emailHelp" >
                  <div class="messages"><?= form_error('name_goods');?></div>
                </div>
                <div class="form-group">
                  <label for="prince">Gambar Barang</label>
                  <input type="file" class="form-control" name="file" size="20" />
                </div>
                <div class="form-group">
                  <label for="prince">Harga Barang</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Rp</span>
                    </div>
                    <input type ="text" value="<?=set_value('prince')?>" name="prince" class="form-control" id="prince" aria-describedby="emailHelp" >
                  </div>
                  <div class="messages"><?= form_error('prince');?></div>
                </div>
                <div class="form-group">
                  <label for="prince">Kategori</label>
                  <select class="form-control cats" name="category">
                    <option></option>
                    <?php foreach ($cats as $row ): ?>
                    <option value="<?= $row['slug']?>"><?= $row['nama']?></option>
                    <?php endforeach?>
                  </select>
                  <div class="messages"><?= form_error('prince');?></div>
                </div>
                <div class="form-group">
                  <label for="Deskripsi">Deskripsi</label>
                  <textarea id="Deskripsi" name="description" class="form-control"><?= set_value('description');?></textarea>
                  <div class="messages"><?= form_error('description');?></div>
                </div>
                <button type="submit" name="tambahkan" class="btn btn-leon">Selesai</button>
                <button type="submit" class="d-none btn mt-sm-0 mt-3 btn-leon">Aktifkan</button>
                <?= form_close()?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>source/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>source/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>source/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>source/vendor/cleave.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script type="text/javascript">
    
    var cleave = new Cleave($("#prince"), {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
    });
    $(document).ready(function() {
    $('.cats').select2({
    placeholder: "Pilih kategori ...",
    allowClear: true
    });
    });
    </script>
  </body>
</html>