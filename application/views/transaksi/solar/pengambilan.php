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
                    <th>No Pengambilan</th>
                    <th>Tanggal</th>
                    <th>Kode Alat</th>
                    <th>Quantity</th>
                    <th>Operator</th>
                    <th style="width: 10px">Modify</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>001</td>
                    <td>28/05/2020</td>
                    <td>MX412</td>
                    <td>290</td>
                    <td>Ujang</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-detail" data-tolltip="tooltip" data-placement="top" title="Detail"><i class="fas fa-eye"></i></button>

                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt" data-tolltip="tooltip" data-placement="top" title="Edit"></i></button>

                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-delete" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <small class="text-muted float-right">Data pengambilan solar pada tanggal 09/05/2020</small>
    </div>
</div>
<!-- /.card -->