<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Stok Solar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                    <li class="breadcrumb-item active">Stok Solar</li>
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
                        <h3 class="card-title">Stok Solar</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Export" data-widget="chat-pane-toggle">
                                <i class="fas fa-download"></i> Export
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="alert alert-secondary" role="alert">
                            Laporan Stok Solar <b>Tangki 5000L</b> mulai bulan <b>Januari</b> sampai <b>Februari</b>
                        </div>
                        <table id="TabelUser" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Tangki</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1224</td>
                                    <td>5000L</td>
                                    <td>17/07/1996</td>
                                    <td>Pengambilan</td>
                                    <td>2000</td>
                                </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small class="text-muted float-right">Stok Solar pada tanggal 09/05/2020</small>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Stok Solar</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="Tangki">Tangki</label>
                                    <select class="custom-select" id="Tangki">
                                        <option selected>Pilih Tangki</option>
                                        <option value="1">Tangki 5000L</option>
                                        <option value="2">Tangki 8000L</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="BulanAwal">Bulan Awal</label>
                                    <select class="custom-select" id="BulanAwal">
                                        <option selected>Pilih Bulan Awal</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="2">Maret</option>
                                        <option value="2">April</option>
                                        <option value="2">Mei</option>
                                        <option value="2">Juni</option>
                                        <option value="2">Juli</option>
                                        <option value="2">Agustus</option>
                                        <option value="2">September</option>
                                        <option value="2">Oktober</option>
                                        <option value="2">November</option>
                                        <option value="2">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="BulanAkhir">Bulan Akhir</label>
                                    <select class="custom-select" id="BulanAkhir">
                                        <option selected>Pilih Bulan Akhir</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="2">Maret</option>
                                        <option value="2">April</option>
                                        <option value="2">Mei</option>
                                        <option value="2">Juni</option>
                                        <option value="2">Juli</option>
                                        <option value="2">Agustus</option>
                                        <option value="2">September</option>
                                        <option value="2">Oktober</option>
                                        <option value="2">November</option>
                                        <option value="2">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>





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