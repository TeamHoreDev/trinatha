<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Master User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                    <li class="breadcrumb-item active">Master User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">List User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <table id="TabelUser" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Telpon</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th style="width: 10px">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($MasterUser as $dt) {?>
                                <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $dt->Nik ?></td>
                                <td><?php echo $dt->NamaLengkap ?></td>
                                <td><?php echo $dt->Telepon ?></td>
                                <td><?php echo $dt->Email ?></td>
                                <td><?php echo $dt->Level ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-detail" data-tolltip="tooltip" data-placement="top" title="Detail"><i class="fas fa-eye"></i></button>

                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt" data-tolltip="tooltip" data-placement="top" title="Edit"></i></button>

                                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-delete" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <small class="text-muted float-right">Data user pada tanggal 09/05/2020</small>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Nik">NIK</label>
                            <input type="text" class="form-control <?php echo form_error('Nik')?'is-invalid':'' ?>" id="Nik" name="Nik" placeholder="Enter NIK">
                            <div class="invalid-feedback">
                              <?php echo form_error('Nik') ?>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="NamaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control <?php echo form_error('NamaLengkap')?'is-invalid':'' ?>" id="NamaLengkap" name="NamaLengkap" placeholder="Enter Nama Lengkap">
                        <div class="invalid-feedback">
                          <?php echo form_error('NamaLengkap') ?>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="Telepon">Telepon</label>
                    <input type="text" class="form-control <?php echo form_error('Telepon')?'is-invalid':'' ?>" id="Telepon" name="Telepon" placeholder="Enter Telepon">
                    <div class="invalid-feedback">
                      <?php echo form_error('Telepon') ?>
                  </div>
              </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control <?php echo form_error('Email')?'is-invalid':'' ?>" id="Email" name="Email" placeholder="Enter Email">
                <div class="invalid-feedback">
                  <?php echo form_error('Email') ?>
              </div>
          </div>
          <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control <?php echo form_error('Username')?'is-invalid':'' ?>" id="Username" placeholder="Enter Username">
            <div class="invalid-feedback">
              <?php echo form_error('Username') ?>
          </div>
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="text" class="form-control" id="Password" placeholder="Enter Password">
        <div class="invalid-feedback">
          <?php echo form_error('Password') ?>
      </div>
  </div>
  <div class="form-group">
    <label for="Level">Level</label>
    <select class="form-control <?php echo form_error('Level')?'is-invalid':'' ?>" id="Level" name="Level">
        <option hidden value="" selected>Pilih Level</option>
        <option>Administrator</option>
        <option>Operational</option>
        <option>Manager</option>
    </select>
    <div class="invalid-feedback">
      <?php echo form_error('Level') ?>
  </div>
</div>

</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary float-right">Daftar</button>
</div>
</form>
</div>
<!-- /.card -->
</div>
</div>
</div>
</section>


<!-- modal-detail -->
<div class="modal fade" id="modal-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card card-warning card-outline">
                <div class="card-body">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="https://avatars1.githubusercontent.com/u/19869153?s=460&u=c3eb07e1bfd064b1b8761816324c53a56e9792d7&v=4" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Ade Kasep</h3>

                    <p class="text-muted text-center">Marketing</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NIK</b> <a class="float-right">46899</a>
                        </li>
                        <li class="list-group-item">
                            <b>Telepon</b> <a class="float-right">0877563435</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right">ade.kasep@gmail.com</a>
                        </li>
                        <li class="list-group-item">
                            <b>Alamat</b> <a class="float-right">Majalengka City</a>
                        </li>
                        <li class="list-group-item">
                            <b>Level</b> <a class="float-right">Administrator</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- /.modal -->


<!-- modal-delete -->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-body text-center">

                <b class="h4">Apakah anda yakin?</b>
                <p>data akan dihapus permanen!</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-outline-light">Hapus</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- page script -->
<script>
    $(document).ready(function() {
        $('#TabelUser').DataTable();
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })

    });
</script>