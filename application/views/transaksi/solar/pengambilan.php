<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Pengambilan Solar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active">Pengambilan Solar</li>
            </ol>
        </div>
    </div>
</section>
<div class="card card-navy">
    <div class="card-header">
        <h2 class="card-title pt-1">List Pengambilan Solar</h2>
        <a href="<?= base_url('solar/create_pengambilan') ?>" class="btn btn-sm btn-primary float-right"> + Insert</a>
    </div>
    <!-- /.card-header -->
    <!-- card-body -->
    <div class="card-body">
        <table id="TabelPengambilan" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Tanggal / Jam</th>
                    <th>Tangki</th>
                    <th>Nama Alat</th>
                    <th>Quantity</th>
                    <th>Operator</th>
                    <th>Stok</th>
                    <th style="width: 10px">Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pengambilan as $key) : ?>
                    <tr>
                        <td><?= $key->kode_transaksi ?></td>
                        <td><?= $key->tanggal . " / " . $key->jam ?></td>
                        <td><?= $key->tangki ?>L</td>
                        <td><?= $key->nama_alat ?></td>
                        <td><?= $key->solar_out ?></td>
                        <td><?= $key->operator ?></td>
                        <td><?= $key->stok ?>L</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm" onclick="deleteConfirm('<?= base_url() . 'solar/delete/' . $key->id_transaksi ?>')" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <small class="text-muted float-right">Data pengambilan solar pada tanggal 09/05/2020</small>
    </div>
</div>
<!-- /.card -->

<!-- datatables script -->
<script>
    $(document).ready(function() {
        $('#TabelPengambilan').DataTable({
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