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
        <h2 class="card-title pt-1">List Peminjaman Solar</h2>
        <a href="<?= base_url('solar/create_peminjaman') ?>" class="btn btn-sm btn-primary float-right"> + Tambah</a>
    </div>
    <!-- /.card-header -->
    <!-- card-body -->
    <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tangki 5000</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tangki 8000</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Peminjaman Tangki 5000</div>
                    </div>
                    <div class="card-body">
                        <table id="TabelPeminjaman" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Nama Vendor</th>
                                    <th>Alat</th>
                                    <th>Quantity</th>
                                    <th>Tangki</th>
                                    <th>Status</th>
                                    <th>PIC</th>
                                    <th style="width: 10px">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($peminjaman5k as $key) : ?>
                                    <tr>
                                        <td><?= $key->kode_transaksi ?></td>
                                        <td><?= $key->tanggal ?></td>
                                        <td><?= $key->nama_vendor ?></td>
                                        <td><?= $key->nama_alat ?></td>
                                        <td><?= $key->solar_out ?>L</td>
                                        <td><?= $key->tangki ?>L</td>
                                        <td>
                                            <?php
                                            if ($key->status == 0) {
                                                echo '<span class="badge badge-danger">belum kembali</span>';
                                            } else {
                                                echo '<span class="badge badge-success">sudah kembali</span>';
                                            }  ?>
                                        </td>
                                        <td><?= $key->nama_user ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url('solar/edit_peminjaman/') . $key->id_peminjaman ?>"><button type="button" class="btn btn-default btn-sm" data-tolltip="tooltip" data-placement="top" <button type="button" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt" data-tolltip="tooltip" data-placement="top" title="Edit"></i></button></a>
                                                <button type="button" class="btn btn-default btn-sm" onclick="deleteConfirm('<?= base_url() . 'solar/delete/' . $key->id_transaksi ?>')" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                        </table>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Peminjaman Tangki 8000</div>
                    </div>
                    <div class="card-body">
                        <table id="TabelPeminjaman8k" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Nama Vendor</th>
                                    <th>Alat</th>
                                    <th>Quantity</th>
                                    <th>Tangki</th>
                                    <th>Status</th>
                                    <th>PIC</th>
                                    <th style="width: 10px">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($peminjaman8k as $key) : ?>
                                    <tr>
                                        <td><?= $key->kode_transaksi ?></td>
                                        <td><?= $key->tanggal ?></td>
                                        <td><?= $key->nama_vendor ?></td>
                                        <td><?= $key->nama_alat ?></td>
                                        <td><?= $key->solar_out ?>L</td>
                                        <td><?= $key->tangki ?>L</td>
                                        <td>
                                            <?php
                                            if ($key->status == 0) {
                                                echo '<span class="badge badge-danger">belum kembali</span>';
                                            } else {
                                                echo '<span class="badge badge-success">sudah kembali</span>';
                                            }  ?>
                                        </td>
                                        <td><?= $key->nama_user ?></td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm" onclick="deleteConfirm('<?= base_url() . 'solar/delete/' . $key->id_transaksi ?>')" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
</div>
<!-- /.card -->

<!-- datatables script -->
<script>
    $(document).ready(function() {
        $('#TabelPeminjaman').DataTable({
            "ordering": false
        });
        $('#TabelPeminjaman8k').DataTable({
            "ordering": false
        });
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })

    });
</script>


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