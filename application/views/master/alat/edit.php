<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Master Alat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('alat') ?>">Master Alat</a></li>
                    <li class="breadcrumb-item active">Edit Master Alat</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card card-navy">
            <div class="card-header">
                <h3 class="card-title">Edit data alat</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <input type="hidden" name="fid_alat" style="display: none" value="<?= $alat->id_alat ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fkode_alat">Kode Alat</label>
                        <input type="text" class="form-control <?= form_error('fkode_alat') ? 'is-invalid' : '' ?>" id="fkode_alat" name="fkode_alat" placeholder="Enter Kode Alat" value="<?= $this->input->post('fkode_alat') ? $this->input->post('fkode_alat') : $alat->kode_alat ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fkode_alat') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fnama_alat">Nama Alat</label>
                        <input type="text" class="form-control <?= form_error('fnama_alat') ? 'is-invalid' : '' ?>" id="fnama_alat" name="fnama_alat" placeholder="Enter Nama Alat" value="<?= $this->input->post('fnama_alat') ? $this->input->post('fnama_alat') : $alat->nama_alat ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fnama_alat') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foperator">Nama Operator</label>
                        <input type="text" class="form-control <?= form_error('foperator') ? 'is-invalid' : '' ?>" id="foperator" name="foperator" placeholder="Enter Nama Alat" value="<?= $this->input->post('foperator') ? $this->input->post('foperator') : $alat->operator ?>">
                        <div class="invalid-feedback">
                            <?= form_error('foperator') ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    <a href="<?= base_url('alat') ?>" class="btn btn-secondary float-left">Batal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>