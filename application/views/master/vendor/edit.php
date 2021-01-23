<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Vendor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('vendor') ?>">Master Vendor</a></li>
                    <li class="breadcrumb-item active">Edit Vendor</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-md-4">
    <!-- general form elements -->
    <div class="card card-navy">
        <div class="card-header">
            <h3 class="card-title">Edit Data Vendor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="" autocomplete="off">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <input type="hidden" name="fid_vendor" value="<?= $vendor->id_vendor ?>" style="display: none">
            <div class="card-body">
                <div class="form-group">
                    <label for="fnama_vendor">Nama Vendor</label>
                    <input type="text" class="form-control <?php echo form_error('fnama_vendor') ? 'is-invalid' : '' ?>" id="fnama_vendor" name="fnama_vendor" placeholder="Enter nama vendor" value="<?= $this->input->post('fnama_vendor') ? $this->input->post('fnama_vendor') : $vendor->nama_vendor ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('fnama_vendor') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ftelepon_vendor">Telepon</label>
                    <input type="text" class="form-control <?php echo form_error('ftelepon_vendor') ? 'is-invalid' : '' ?>" id="ftelepon_vendor" name="ftelepon_vendor" placeholder="Enter Nama Lengkap" value="<?= $this->input->post('ftelepon_vendor') ? $this->input->post('ftelepon_vendor') : $vendor->telepon_vendor ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ftelepon_vendor') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fpic_vendor">PIC Vendor</label>
                    <input type="text" class="form-control <?php echo form_error('fpic_vendor') ? 'is-invalid' : '' ?>" id="fpic_vendor" name="fpic_vendor" placeholder="Enter telepon" value="<?= $this->input->post('fpic_vendor') ? $this->input->post('fpic_vendor') : $vendor->pic_vendor ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('fpic_vendor') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="falamat">Alamat Vendor</label>
                    <textarea name="falamat" id="falamat" class="form-control <?php echo form_error('falamat') ? 'is-invalid' : '' ?>"><?= $this->input->post('falamat') ? $this->input->post('falamat') : $vendor->alamat ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('falamat') ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Update</button>
                <a href="<?= base_url('vendor') ?>" class="btn btn-secondary float-left">Batal</a>

            </div>
        </form>
    </div>
    <!-- /.card -->
</div>