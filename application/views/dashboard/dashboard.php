<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Dashboard</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div>
  </div>
</section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Summary card -->
    <!-- /.row -->
    <!-- Stok solar sekarang -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-navy">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-navy">
                  <div class="card-header">Tangki 5000 Liter</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <div class="progress vertical" style="width: 100px">
                          <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="<?= $stok_5000 ?>" aria-valuemin="0" aria-valuemax="5000" style="height: <?= $stok_5000 / 5000 * 100 ?>%">
                            <h5><?= floor($stok_5000 / 5000 * 100) ?>%</h5>

                            <span class="sr-only">40%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="card">
                          <div class="card-body">
                            <strong>Stok Sekarang : </strong> <span class="badge badge-primary"><?= $stok_5000 ?> L</span> <br>
                            <strong>Kapasitas Maksimum : </strong> 5000 L <br>
                            <strong>Kapasitas Minimum : </strong> 1500 L
                          </div>
                        </div>
                        <?php if ($stok_5000 < 1500) { ?>
                          <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-circle"></i>
                            Stok solar kurang dari 1500 Liter, segera lakukan <a href="<?= base_url('solar/create_penerimaan') ?>" class="alert-link">Pengisian Solar</a>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-navy">
                  <div class="card-header">Tangki 8000 Liter</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <div class="progress vertical" style="width: 100px">
                          <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="<?= $stok_8000 ?>" aria-valuemin="0" aria-valuemax="8000" style="height: <?= $stok_8000 / 8000 * 100 ?>%">
                            <h5><?= floor($stok_8000 / 8000 * 100) ?>%</h5>
                            <span class="sr-only"><?= $stok_8000 / 8000 * 100 ?>%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="card">
                          <div class="card-body">
                            <strong>Stok Sekarang : </strong> <span class="badge badge-primary"><?= $stok_8000 ?> L</span><br>
                            <strong>Kapasitas Maksimum : </strong> 8000 L <br>
                            <strong>Kapasitas Minimum : </strong> 2000 L
                          </div>
                        </div>
                        <?php if ($stok_8000 < 2000) { ?>
                          <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-circle"></i>
                            Stok solar kurang dari 2000 Liter, segera lakukan <a href="<?= base_url('solar/create_penerimaan') ?>" class="alert-link">Pengisian Solar</a>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <img src="<?php echo base_url() . "assets/"; ?>dist/img/logo.jpg" class="img-fluid img-thumbnail" alt="Responsive image"> -->