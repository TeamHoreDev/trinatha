<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Pengambilan Solar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active">Edit Pengambilan Solar</li>
            </ol>
        </div>
    </div>
</section>
<div class="card card-navy">
    <div class="card-header">
        <h2 class="card-title pt-1">Edit Pengambilan Solar</h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="" autocomplete="off">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
        <input type="hidden" name="fkode" value="<?= $pengambilan->kode_transaksi ?>" style="display: none">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="KodeTransaksi">Kode Transaksi</label>
                    <input type="text" class="form-control <?= form_error('fkode_transaksi') ? 'is-invalid' : '' ?>" id="fkode_transaksi" name="fkode_transaksi" value="<?= $pengambilan->kode_transaksi ?>" readonly>
                </div>
                <div class="form-group col-6">
                    <label for="ftangki">Tangki</label>
                    <select class="custom-select <?= form_error('ftangki') ? 'is-invalid' : '' ?>" id="ftangki" name="ftangki">
                        <option selected value="" hidden>Pilih Tangki</option>
                        <option value="5000" <?= $pengambilan->tangki == "5000" ? 'selected' : '' ?>>Tangki 5000L</option>
                        <option value="8000" <?= $pengambilan->tangki == "8000" ? 'selected' : '' ?>>Tangki 8000L</option>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('ftangki') ?>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="ftanggal">Tanggal</label>
                    <input type="text" class="form-control <?= form_error('ftanggal') ? 'is-invalid' : '' ?>" id="ftanggal" name="ftanggal" placeholder="Enter tanggal " value="<?= $pengambilan->tanggal ?>" readonly>
                    <div class=" invalid-feedback">
                        <?= form_error('ftanggal') ?>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="fjam">Jam Pengambilan</label>
                    <input type="text" class="form-control <?= form_error('fjam') ? 'is-invalid' : '' ?>" id="fjam" name="fjam" placeholder="Enter jam " value="<?= $pengambilan->jam ?>" readonly>
                    <div class=" invalid-feedback">
                        <?= form_error('fjam') ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="falat">Kode Alat</label>
                    <select class="custom-select <?= form_error('falat') ? 'is-invalid' : '' ?>" id="falat" name="falat">
                        <option selected value="" hidden>Pilih Alat</option>
                        <?php foreach ($alat as $key) : ?>
                            <option value="<?= $key->id_alat ?>" <?= $pengambilan->id_alat == $key->id_alat ? 'selected' : '' ?>><?= $key->kode_alat . " - " . $key->nama_alat ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('falat') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="fsolar_out">Quantity (Liter)</label>
                    <input type="text" class="form-control <?= form_error('fsolar_out') ? 'is-invalid' : '' ?>" id="fsolar_out" name="fsolar_out" placeholder="Enter quantity" value="<?= $pengambilan->solar_out ?>">
                    <div class="invalid-feedback">
                        <?= form_error('fsolar_out') ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="fketerangan">Keterangan</label>
                    <textarea type="text" class="form-control <?= form_error('fketerangan') ? 'is-invalid' : '' ?>" id="fketerangan" name="fketerangan" placeholder="Enter keterangan" "><?= $pengambilan->keterangan ?></textarea>
                    <div class=" invalid-feedback">
                        <?= form_error('fketerangan') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Update</button>
            <a href="<?= base_url('solar/pengambilan') ?>" class="btn btn-secondary float-left">Batal</a>
        </div>
    </form>
</div>
<!-- /.card -->