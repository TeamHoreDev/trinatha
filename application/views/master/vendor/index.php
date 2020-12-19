<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Master Vendor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                    <li class="breadcrumb-item active">Master Vendor</li>
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
                <h3 class="card-title">List Vendor</h3>
                <a href="<?= base_url('vendor/create') ?>" class="btn btn-sm btn-primary float-right"> + Insert</a>

            </div>
            <!-- /.card-header -->
            <!-- card-body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="TabelUser" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Vendor</th>
                                <th>PIC</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th style="width: 10px">Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($vendor as $dt) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $dt->nama_vendor ?></td>
                                    <td><?php echo $dt->pic_vendor ?></td>
                                    <td><?php echo $dt->telepon_vendor ?></td>
                                    <td><?php echo $dt->alamat ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-detail" data-tolltip="tooltip" data-placement="top" title="Detail"><i class="fas fa-eye"></i></button>

                                            <a href="<?= base_url('vendor/edit/') . $dt->id_vendor ?>"><button type="button" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt" data-tolltip="tooltip" data-placement="top" title="Edit"></i></button></a>

                                            <button type="button" class="btn btn-default btn-sm" onclick="deleteConfirm('<?= base_url() . 'vendor/delete/' . $dt->id_vendor ?>')" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <small class="text-muted float-right">Data vendor pada tanggal 09/05/2020</small>
            </div>
        </div>
        <!-- /.card -->
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



<!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center">
                        <i class="fa  fa-exclamation-triangle" style="font-size: 70px; color:red;"></i>
                    </div>
                    <div class="col-9 pt-2">
                        <h5>Apakah anda yakin?</h5>
                        <span>Data yang dihapus tidak akan bisa dikembalikan.</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"> Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#"> Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirm -->
<script type="text/javascript">
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
<!-- page script -->
<script>
    $(function() {
        $('#TabelUser').DataTable({
            "responsive": true,
            "autoWidth": true,
            "info": false,
        });
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })

    });
</script>