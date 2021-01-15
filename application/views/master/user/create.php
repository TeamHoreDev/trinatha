<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Master User</a></li>
                    <li class="breadcrumb-item active">Tambah User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-md-4">
    <!-- general form elements -->
    <div class="card card-navy">
        <div class="card-header">
            <h3 class="card-title">Daftar User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="" autocomplete="off">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <div class="card-body">
                <div class="form-group">
                    <label for="fnik">NIK</label>
                    <input type="text" class="form-control <?php echo form_error('fnik') ? 'is-invalid' : '' ?>" id="fnik" name="fnik" placeholder="Enter NIK" value="<?= $this->input->post('fnik'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('fnik') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fnama_user">Nama Lengkap</label>
                    <input type="text" class="form-control <?php echo form_error('fnama_user') ? 'is-invalid' : '' ?>" id="fnama_user" name="fnama_user" placeholder="Enter Nama Lengkap" value="<?= $this->input->post('fnama_user'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('fnama_user') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ftelepon">Telepon</label>
                    <input type="text" class="form-control <?php echo form_error('ftelepon') ? 'is-invalid' : '' ?>" id="ftelepon" name="ftelepon" placeholder="Enter telepon" value="<?= $this->input->post('ftelepon'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ftelepon') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="femail">Email</label>
                    <input type="text" class="form-control <?php echo form_error('femail') ? 'is-invalid' : '' ?>" id="femail" name="femail" placeholder="Enter email" value="<?= $this->input->post('femail'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('femail') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fusername">Username</label>
                    <input type="text" class="form-control <?php echo form_error('fusername') ? 'is-invalid' : '' ?>" id="fusername" name="fusername" placeholder="Enter Username" value="<?= $this->input->post('fusername'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('fusername') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fpassword">Password</label>
                    <input type="password" class="form-control <?php echo form_error('fpassword') ? 'is-invalid' : '' ?>"" id=" fpassword" name="fpassword" placeholder="Enter password">
                    <div class="invalid-feedback">
                        <?php echo form_error('fpassword') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="frole">Role</label>
                    <select class="form-control <?php echo form_error('frole') ? 'is-invalid' : '' ?>" id="frole" name="frole">
                        <option hidden value="" selected>Pilih frole</option>
                        <option value="1">Admin Operasional</option>
                        <option value="2">Fuelman</option>
                        <option value="3">Supervisor</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('frole') ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Daftar</button>
                <a href="<?= base_url('user') ?>" class="btn btn-secondary float-left">Batal</a>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>