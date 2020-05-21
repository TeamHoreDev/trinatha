<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Setting Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Setting Profile</li>
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
            <div class="col-sm-4">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Profile User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Tanggal">NIK</label>
                                <input type="text" class="form-control" id="Tanggal" name="Tanggal" placeholder="Enter Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="KodeUnit">Nama Lengkap</label>
                                <input type="text" class="form-control" id="KodeUnit" name="KodeUnit" placeholder="Enter Kode Unit">
                            </div>
                            <div class="form-group">
                                <label for="NamaAlat">Telpon</label>
                                <input type="text" class="form-control" id="NamaAlat" name="NamaAlat" placeholder="Enter Nama Alat">
                            </div>
                            <div class="form-group">
                                <label for="Operator">Email</label>
                                <input type="text" class="form-control" id="Operator" name="Operator" placeholder="Enter Operator">
                            </div>
                            <div class="form-group">
                                <label for="volume">Username</label>
                                <input type="text" class="form-control" id="volume" placeholder="Enter Volume">
                            </div>
                            <div class="form-group">
                                <label for="volume">Password</label>
                                <input type="text" class="form-control" id="volume1" placeholder="Enter Volume">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Update</button>
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