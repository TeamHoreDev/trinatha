<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Preview Laporan Penerimaan Solar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('laporan/penerimaan') ?>">Laporan Penerimaan Solar</a></li>
                    <li class="breadcrumb-item active">Preview Laporan Penerimaan Solar</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-navy">
            <div class="card-header">
                <h3 class="card-title">Laporan Penerimaan Solar</h3>
                <a href="<?= base_url('laporan/penerimaan') ?>" class="btn btn-sm btn-primary float-right"><i class="fa fa-chevron-left"></i> Kembali</a>

            </div>
            <!-- /.card-header -->
            <!-- card-body -->
            <div class="card-body">

                <div class="alert alert-primary" role="alert">
                    <div class="row">
                        <div class="col-md-10">
                            Preview laporan penerimaan solar tangki <?= $tangki ?> L pada tanggal <?= $tgl_awal ?> sampai <?= $tgl_akhir ?>, pilih <a href="<?= base_url('laporan/penerimaan') ?>">kembali</a> untuk merubah periode dan tangki.
                        </div>
                        <div class="col-md-2">
                            <a href="<?= base_url('download/penerimaan/') . $tgl_awal . '/' . $tgl_akhir . '/' . $tangki . '/' . $vendor ?>" target="_blank"><button class="btn btn-sm btn-default float-right"><i class="fa fa-download"></i> Download PDF</button> </a>
                        </div>
                    </div>




                </div>
                <div class="table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Kode Transaksi</th>
                                <th>Vendor</th>
                                <th>Tangki</th>
                                <th>QTY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $key) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $key->tanggal ?></td>
                                    <td><?= $key->kode_transaksi ?></td>
                                    <td><?= $key->nama_vendor ?></td>
                                    <td><?= $key->tangki ?></td>
                                    <td><?= $key->solar_in ?></td>
                                </tr>
                            <?php } ?>
                            <td colspan="5" class="text-center"><strong>Total Penerimaan Solar</strong></td>
                            <td><?= $total ?></td>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
        </div>
        <!-- /.card -->
    </div>
</section>