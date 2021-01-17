<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Preview Laporan Jam Kerja Alat Berat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('laporan/jam_kerja') ?>">Laporan Jam Kerja Alat Berat</a></li>
                    <li class="breadcrumb-item active">Preview Laporan Jam Kerja Alat Berat</li>
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
                <h3 class="card-title">Laporan Jam Kerja Alat Berat</h3>
                <a href="<?= base_url('laporan/jam_kerja') ?>" class="btn btn-sm btn-primary float-right"><i class="fa fa-chevron-left"></i> Kembali</a>

            </div>
            <!-- /.card-header -->
            <!-- card-body -->
            <div class="card-body">
                <div class="alert alert-primary" role="alert">
                    <div class="row">
                        <div class="col-md-10">
                            Preview laporan jam kerja alat berat pada tanggal <?= $tgl_awal ?> sampai <?= $tgl_akhir ?>pilih <a href="<?= base_url('laporan/penerimaan') ?>">kembali</a> untuk merubah periode.
                        </div>
                        <div class="col-md-2">
                            <a href="<?= base_url('download/jam_kerja/') . $tgl_awal . '/' . $tgl_akhir . '/' . $alat ?>" target="_blank"><button class="btn btn-sm btn-default float-right"><i class="fa fa-download"></i> Download PDF</button> </a>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Kode Alat</th>
                                <th>Nama Alat</th>
                                <th>Operator</th>
                                <th>Tangki</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $key) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $key->tanggal ?></td>
                                    <td><?= $key->jam ?></td>
                                    <td><?= $key->kode_alat ?></td>
                                    <td><?= $key->nama_alat ?></td>
                                    <td><?= $key->operator ?></td>
                                    <td><?= $key->tangki ?></td>
                                    <td><?= $key->solar_out ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="7"><strong>Total</strong></td>
                                <td><?= $total ?></td>
                            </tr>
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