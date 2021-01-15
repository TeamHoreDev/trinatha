<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Pengembalian Solar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active">Pengembalian Solar</li>
            </ol>
        </div>
    </div>
</section>
<div class="card card-navy">
    <div class="card-header">
        <h2 class="card-title pt-1">Input Pengembalian Solar</h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="" autocomplete="off">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
        <input type="hidden" name="fjenis_transaksi" value="pengembalian" style="display: none">
        <input type="hidden" name="fid_peminjaman" value="<?= $peminjaman->id_peminjaman ?>" style="display: none">
        <div class="card-body">
            <div class="row mb-1">
                <div class="col-12">
                    <div class="h5"><strong>Detail Peminjaman</strong></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <strong>Nama Vendor : </strong> <?= $peminjaman->nama_vendor ?><br>
                    <strong>Telepon Vendor : </strong> <?= $peminjaman->telepon_vendor ?><br>
                    <strong>PIC Vendor : </strong> <?= $peminjaman->pic_vendor ?><br>
                    <strong>Alamat Vendor : </strong> <?= $peminjaman->alamat ?>
                </div>
                <div class="col-md-6">
                    <strong>Kode Transaksi Peminjaman : </strong> <?= $peminjaman->kode_transaksi ?><br>
                    <strong>Tanggal Peminjaman : </strong> <?= $peminjaman->tanggal ?><br>
                    <strong>Tangki Peminjaman : </strong> <?= $peminjaman->tangki ?><br>
                    <strong>Qty Peminjaman : </strong> <?= $peminjaman->solar_out ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-6">
                    <label for="KodeTransaksi">Kode Transaksi</label>
                    <input type="text" class="form-control <?= form_error('fkode_transaksi') ? 'is-invalid' : '' ?>" id="fkode_transaksi" name="fkode_transaksi" value="<?= "SIP" . date('ym') . sprintf("%04s", $kode) ?>" readonly>
                </div>
                <div class="form-group col-6">
                    <label for="ftangki">Tangki</label>
                    <select class="custom-select <?= form_error('ftangki') ? 'is-invalid' : '' ?>" id="ftangki" name="ftangki">
                        <option selected value="" hidden>Pilih Tangki</option>
                        <option value="5000" <?= $this->input->post('ftangki') == "5000" ? 'selected' : '' ?>>Tangki 5000L</option>
                        <option value="8000" <?= $this->input->post('ftangki') == "8000" ? 'selected' : '' ?>>Tangki 8000L</option>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('ftangki') ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="ftanggal">Tanggal Pengembalian</label>
                    <input type="text" class="form-control <?= form_error('ftanggal') ? 'is-invalid' : '' ?>" id="ftanggal" name="ftanggal" placeholder="Enter tanggal " value="<?= date('Y-m-d') ?>" readonly>
                    <div class=" invalid-feedback">
                        <?= form_error('ftanggal') ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="fsolar_in">Quantity (Liter)</label>
                    <input type="text" class="form-control <?= form_error('fsolar_in') ? 'is-invalid' : '' ?>" id="fsolar_in" name="fsolar_in" placeholder="Enter quantity" value="<?= $this->input->post('fsolar_in'); ?>">
                    <div class="invalid-feedback">
                        <?= form_error('fsolar_in') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
            <a href="<?= base_url('solar/pengembalian') ?>" class="btn btn-secondary float-left">Batal</a>
        </div>
    </form>
</div>
<!-- /.card -->