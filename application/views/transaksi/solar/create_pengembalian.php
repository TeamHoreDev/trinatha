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
        <h2 class="card-title pt-1">List Peminjaman Solar</h2>
    </div>
    <!-- /.card-header -->
    <!-- card-body -->
    <div class="card-body">
        <div class="alert alert-warning" role="alert">Silahkan pilih data peminjaman!</div>
        <table id="TabelPeminjaman" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Tanggal</th>
                    <th>Nama Vendor</th>
                    <th>Quantity</th>
                    <th>Tanki</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjaman as $key) : ?>
                    <tr>
                        <td><?= $key->kode_transaksi ?></td>
                        <td><?= $key->tanggal ?></td>
                        <td><?= $key->nama_vendor ?></td>
                        <td><?= $key->solar_out ?>L</td>
                        <td><?= $key->tangki ?>L</td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= base_url('solar/form_pengembalian/') . $key->id_peminjaman ?>"><button type="button" class="btn btn-warning btn-sm" data-tolltip="tooltip" data-placement="top" title="Create Pengembalian">create pengembalian</button></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <small class="text-muted float-right">Data Peminjaman solar pada tanggal 09/05/2020</small>
    </div>
</div>
<!-- /.card -->

<!-- datatables script -->
<script>
    $(document).ready(function() {
        $('#TabelPeminjaman').DataTable({
            "ordering": false
        });
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })

    });
</script>