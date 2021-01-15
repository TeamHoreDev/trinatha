<?php var_dump($peminjaman) ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Peminjaman Solar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active">Edit Peminjaman Solar</li>
            </ol>
        </div>
    </div>
</section>
<div class="card card-navy">
    <div class="card-header">
        <h2 class="card-title pt-1">Edit Peminjaman Solar</h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="" autocomplete="off">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">

        <input type="hidden" name="fkode" value="<?= $peminjaman->kode_transaksi ?>" style="display: none">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="KodeTransaksi">Kode Transaksi</label>
                    <input type="text" class="form-control <?= form_error('fkode_transaksi') ? 'is-invalid' : '' ?>" id="fkode_transaksi" name="fkode_transaksi" value="<?= $peminjaman->kode_transaksi ?>" readonly>
                </div>
                <div class="form-group col-6">
                    <label for="ftanggal">Tanggal</label>
                    <input type="text" class="form-control <?= form_error('ftanggal') ? 'is-invalid' : '' ?>" id="ftanggal" name="ftanggal" placeholder="Enter tanggal " value="<?= $peminjaman->tanggal ?>" readonly>
                    <div class=" invalid-feedback">
                        <?= form_error('ftanggal') ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="ftangki">Tangki</label>
                    <select class="custom-select <?= form_error('ftangki') ? 'is-invalid' : '' ?>" id="ftangki" name="ftangki">
                        <option selected value="" hidden>Pilih Tangki</option>
                        <option value="5000" <?= $peminjaman->tangki == "5000" ? 'selected' : '' ?>>Tangki 5000L</option>
                        <option value="8000" <?= $peminjaman->tangki == "8000" ? 'selected' : '' ?>>Tangki 8000L</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="fvendor">Nama Vendor</label>
                    <select class="custom-select <?= form_error('fvendor') ? 'is-invalid' : '' ?>" id="fvendor" name="fvendor">
                        <option selected value="" hidden>Pilih Vendor</option>
                        <?php foreach ($vendor as $key) : ?>
                            <option value="<?= $key->id_vendor ?>" <?= $peminjaman->id_vendor == $key->id_vendor ? 'selected' : '' ?>><?= $key->nama_vendor ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('fvendor') ?>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="falat">Kode Alat</label>
                    <select class="custom-select <?= form_error('falat') ? 'is-invalid' : '' ?>" id="falat" name="falat">
                        <option selected value="" hidden>Pilih Alat</option>
                        <?php foreach ($alat as $key) : ?>
                            <option value="<?= $key->id_alat ?>" <?= $peminjaman->id_alat == $key->id_alat ? 'selected' : '' ?>><?= $key->kode_alat . " - " . $key->nama_alat ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('falat') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
            <a href="<?= base_url('solar/peminjaman') ?>" class="btn btn-secondary float-left">Batal</a>

        </div>
    </form>
</div>