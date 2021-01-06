<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Peminjaman Solar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active">Peminjaman Solar</li>
            </ol>
        </div>
    </div>
</section>
<div class="card card-navy">
    <div class="card-header">
        <h2 class="card-title pt-1">Input Peminjaman Solar</h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="" autocomplete="off">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
        <input type="hidden" name="fjenis_transaksi" value="peminjaman" style="display: none">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="KodeTransaksi">Kode Transaksi</label>
                    <input type="text" class="form-control <?= form_error('fkode_transaksi') ? 'is-invalid' : '' ?>" id="fkode_transaksi" name="fkode_transaksi" value="<?= "SOP" . date('ym') . sprintf("%04s", $kode) ?>" readonly>
                </div>
                <div class="form-group col-6">
                    <label for="ftanggal">Tanggal</label>
                    <input type="text" class="form-control <?= form_error('ftanggal') ? 'is-invalid' : '' ?>" id="ftanggal" name="ftanggal" placeholder="Enter tanggal " value="<?= date('Y-m-d') ?>" readonly>
                    <div class=" invalid-feedback">
                        <?= form_error('ftanggal') ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="ftangki">Tangki</label>
                    <select class="custom-select <?= form_error('ftangki') ? 'is-invalid' : '' ?>" id="ftangki" name="ftangki">
                        <option selected value="" hidden>Pilih Tangki</option>
                        <option value="5000" <?= $this->input->post('ftangki') == "5000" ? 'selected' : '' ?>>Tangki 5000L</option>
                        <option value="8000" <?= $this->input->post('ftangki') == "8000" ? 'selected' : '' ?>>Tangki 8000L</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="fvendor">Nama Vendor</label>
                    <select class="custom-select <?= form_error('fvendor') ? 'is-invalid' : '' ?>" id="fvendor" name="fvendor">
                        <option selected value="" hidden>Pilih Vendor</option>
                        <?php foreach ($vendor as $key) : ?>
                            <option value="<?= $key->id_vendor ?>" <?= $this->input->post('fvendor') == $key->id_vendor ? 'selected' : '' ?>><?= $key->nama_vendor ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('fvendor') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="fsolar_out">Quantity (Liter)</label>
                    <input type="text" class="form-control <?= form_error('fsolar_out') ? 'is-invalid' : '' ?>" id="fsolar_out" name="fsolar_out" placeholder="Enter quantity" value="<?= $this->input->post('fsolar_out'); ?>">
                    <div class="invalid-feedback">
                        <?= form_error('fsolar_out') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>