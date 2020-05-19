<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Jam Kerja Alat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Jam Kerja Alat</li>
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
                        <h3 class="card-title">Jam Kerja Alat</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <table id="TabelUser" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kode Alat</th>
                                    <th>Nama Alat</th>
                                    <th>Operator</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Total Jam Kerja</th>
                                    <th>Remaks</th>
                                    <th style="width: 10px">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>17/07/1996</td>
                                    <td>001</td>
                                    <td>Dump Truck</td>
                                    <td>Sigit Ridwiyanto</td>
                                    <td>08:00</td>
                                    <td>17:00</td>
                                    <td>9 Jam</td>
                                    <td>Tunnel</td>
                                    <td>
                                        <div class="btn-group">

                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt" data-tolltip="tooltip" data-placement="top" title="Edit"></i></button>

                                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-delete" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small class="text-muted float-right">Jam Kerja Alat pada tanggal 09/05/2020</small>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Jam Kerja Alat</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" name="Tanggal" placeholder="Enter Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="KodeAlat">Kode Alat</label>
                                <input type="text" class="form-control" id="KodeAlat" name="KodeAlat" placeholder="Enter Kode Alat">
                            </div>
                            <div class="form-group">
                                <label for="NamaAlat">Nama Alat</label>
                                <input type="text" class="form-control" id="NamaAlat" name="NamaAlat" placeholder="Enter Nama Alat">
                            </div>
                            <div class="form-group">
                                <label for="Operator">Operator</label>
                                <input type="text" class="form-control" id="Operator" name="Operator" placeholder="Enter Operator">
                            </div>
                            <div class="form-group">
                                <label for="JamMulai">Jam Mulai</label>
                                <input type="time" class="form-control" id="JamMulai" placeholder="Enter Jam Mulai">
                            </div>
                            <div class="form-group">
                                <label for="JamSelesai">Jam Selesai</label>
                                <input type="time" class="form-control" id="JamSelesai" placeholder="Enter Jam Selesai">
                            </div>
                            <div class="form-group">
                                <label for="Remaks">Remaks</label>
                                <textarea class="form-control" id="Remaks" placeholder="Enter Remaks"></textarea> 
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
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