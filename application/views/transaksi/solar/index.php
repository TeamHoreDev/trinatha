<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Penerimaan Solar</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
          <li class="breadcrumb-item active">Solar</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="col-12">
      <div class="card card-navy card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tabs-pengambilan-solar-tab" data-toggle="pill" href="#tabs-pengambilan-solar" role="tab" aria-controls="tabs-pengambilan-solar" aria-selected="true">Pengambilan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tabs-penerimaan-solar-tab" data-toggle="pill" href="#tabs-penerimaan-solar" role="tab" aria-controls="tabs-penerimaan-solar" aria-selected="false">Penerimaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tabs-peminjaman-solar-tab" data-toggle="pill" href="#tabs-peminjaman-solar" role="tab" aria-controls="tabs-peminjaman-solar" aria-selected="false">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tabs-pengembalian-solar-tab" data-toggle="pill" href="#tabs-pengembalian-solar" role="tab" aria-controls="tabs-pengembalian-solar" aria-selected="false">Pengembalian</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-two-tabContent">
            <div class="tab-pane fade show active" id="tabs-pengambilan-solar" role="tabpanel" aria-labelledby="tabs-pengambilan-solar-tab">
              <!-- mulai content tab pengambilan   -->
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="card mr-3 ml-2 card-navy">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 5000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="3000" aria-valuemin="0" aria-valuemax="5000" style="height: 60%">
                            <span>3000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card  card-navy mr-2">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 8000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="4000" aria-valuemin="0" aria-valuemax="8000" style="height: 50%">
                            <span>4000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- general form elements -->
                      <div class="card card-navy">
                        <div class="card-header">
                          <h3 class="card-title">Input Pengambilan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="KodeTransaksi">Kode Transaksi</label>
                                <input type="text" class="form-control" id="KodeTransaksi" name="KodeTransaksi" placeholder="Enter Kode Transaksi">
                              </div>
                              <div class="form-group col-6">
                                <label for="NoPengambilan">No Pengambilan</label>
                                <input type="text" class="form-control" id="NoPengambilan" name="NoPengambilan" placeholder="Enter No Pengambilan">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" name="Tanggal" placeholder="Enter Tanggal">
                              </div>
                              <div class="form-group col-6">
                                <label for="KodeUnit">Kode Alat</label>
                                <input type="text" class="form-control" id="KodeUnit" name="KodeUnit" placeholder="Enter Kode Unit">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="Quantity">Quantity (Liter)</label>
                                <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Quantity">
                              </div>
                              <div class="form-group col-6">
                                <label for="Operator">Operator</label>
                                <input type="text" class="form-control" id="Operator" name="Operator" placeholder="Enter Operator">
                              </div>
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
              </div>
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <div class="card card-navy">
                    <div class="card-header">
                      <h3 class="card-title">Daftar Pengambilan</h3>
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
                </div>
              </div>
              <!-- akhir content tab pengambilan   -->
            </div>
            <div class="tab-pane fade" id="tabs-penerimaan-solar" role="tabpanel" aria-labelledby="tabs-penerimaan-solar-tab">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="card mr-3 ml-2 card-success">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 5000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="3000" aria-valuemin="0" aria-valuemax="5000" style="height: 60%">
                            <span>3000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card  card-success mr-2">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 8000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="4000" aria-valuemin="0" aria-valuemax="8000" style="height: 50%">
                            <span>4000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- general form elements -->
                      <div class="card card-success">
                        <div class="card-header">
                          <h3 class="card-title">Input Penerimaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="KodeTransaksi">Kode Transaksi</label>
                                <input type="text" class="form-control" id="KodeTransaksi" name="KodeTransaksi" placeholder="Enter Kode Transaksi">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" name="Tanggal" placeholder="Enter Tanggal">
                              </div>
                              <div class="form-group col-6">
                                <label for="NoSuratJalan">No Surat Jalan</label>
                                <input type="text" class="form-control" id="NoSuratJalan" name="NoSuratJalan" placeholder="Enter No Surat Jalan">
                              </div>
                              <div class="form-group col-6">
                                <label for="NamaVendor">Nama Vendor</label>
                                <input type="text" class="form-control" id="NamaVendor" name="NamaVendor" placeholder="Enter Nama Vendor">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="Quantity">Quantity (Liter)</label>
                                <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Quantity">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tangki">Tangki</label>
                                <select class="custom-select" id="Tangki">
                                  <option selected>Pilih Tangki</option>
                                  <option value="1">Tangki 5000L</option>
                                  <option value="2">Tangki 8000L</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right">Simpan</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Daftar Penerimaan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                      <table id="TabelPenerimaan" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Kode Transaksi</th>
                            <th>Tanggal</th>
                            <th>No Surat Jalan</th>
                            <th>Nama Vendor</th>
                            <th>Quantity</th>
                            <th>Tangki</th>
                            <th style="width: 10px">Modify</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1224</td>
                            <td>28/05/2020</td>
                            <td>001</td>
                            <td>Takagi</td>
                            <td>500</td>
                            <td>5000L</td>
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
                      <small class="text-muted float-right">Data penerimaan solar pada tanggal 09/05/2020</small>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-peminjaman-solar" role="tabpanel" aria-labelledby="tabs-peminjaman-solar-tab">
              <!-- mulai content tab peminjaman   -->
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="card mr-3 ml-2 card-warning">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 5000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="3000" aria-valuemin="0" aria-valuemax="5000" style="height: 60%">
                            <span>3000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card  card-warning mr-2">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 8000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="4000" aria-valuemin="0" aria-valuemax="8000" style="height: 50%">
                            <span>4000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- general form elements -->
                      <div class="card card-warning">
                        <div class="card-header">
                          <h3 class="card-title">Input Peminjaman</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="KodeTransaksi">Kode Transaksi</label>
                                <input type="date" class="form-control" id="KodeTransaksi" name="KodeTransaksi" placeholder="Enter Kode Transaksi">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" name="Tanggal" placeholder="Enter Tanggal">
                              </div>
                              <div class="form-group col-6">
                                <label for="NoPeminjaman">No Peminjaman</label>
                                <input type="text" class="form-control" id="NoPeminjaman" name="NoPeminjaman" placeholder="Enter No Peminjaman">
                              </div>
                              <div class="form-group col-6">
                                <label for="NamaVendor">Nama Vendor</label>
                                <input type="text" class="form-control" id="NamaVendor" name="NamaVendor" placeholder="Enter Nama Vendor">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="Quantity">Quantity (Liter)</label>
                                <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Quantity">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tangki">Tangki</label>
                                <select class="custom-select" id="Tangki">
                                  <option selected>Pilih Tangki</option>
                                  <option value="1">Tangki 5000L</option>
                                  <option value="2">Tangki 8000L</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-warning float-right">Simpan</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Daftar Peminjaman</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                      <table id="TabelPeminjaman" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Kode Transaksi</th>
                            <th>Tanggal</th>
                            <th>No Peminjaman</th>
                            <th>Nama Vendor</th>
                            <th>Quantity</th>
                            <th>Tanki</th>
                            <th>Status Pengembalian</th>
                            <th style="width: 10px">Modify</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1224</td>
                            <td>28/05/2020</td>
                            <td>MX412</td>
                            <td>Axata</td>
                            <td>290</td>
                            <td>8000L</td>
                            <td>Ya</td>
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
                      <small class="text-muted float-right">Data Peminjaman solar pada tanggal 09/05/2020</small>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- akhir content tab Peminjaman   -->
            </div>
            <div class="tab-pane fade" id="tabs-pengembalian-solar" role="tabpanel" aria-labelledby="tabs-pengembalian-solar-tab">
              <!-- mulai content tab pengembalian   -->
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="card mr-3 ml-2 card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 5000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="3000" aria-valuemin="0" aria-valuemax="5000" style="height: 60%">
                            <span>3000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card  card-danger mr-2">
                      <div class="card-header">
                        <h3 class="card-title">Tangki 8000L</h3>
                      </div>
                      <div class="card-body text-center">
                        <div class="progress vertical active" style="width: 100px">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="4000" aria-valuemin="0" aria-valuemax="8000" style="height: 50%">
                            <span>4000L</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- general form elements -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">Input Pengembalian</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="KodeTransaksi">Kode Transaksi</label>
                                <input type="text" class="form-control" id="KodeTransaksi" name="KodeTransaksi" placeholder="Enter Kode Transaksi">
                              </div>
                              <div class="form-group col-6">
                                <label for="NoPeminjaman">No Peminjaman</label>
                                <input type="text" class="form-control" id="NoPeminjaman" name="NoPeminjaman" placeholder="Enter No Peminjaman">
                              </div>
                              <div class="form-group col-6">
                                <label for="NoPengembalian">No Pengembalian</label>
                                <input type="text" class="form-control" id="NoPengembalian" name="NoPengembalian" placeholder="Enter No pengembalian">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="Tanggal" name="Tanggal" placeholder="Enter Tanggal">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="Quantity">Quantity (Liter)</label>
                                <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Quantity">
                              </div>
                              <div class="form-group col-6">
                                <label for="Tangki">Tangki</label>
                                <select class="custom-select" id="Tangki">
                                  <option selected>Pilih Tangki</option>
                                  <option value="1">Tangki 5000L</option>
                                  <option value="2">Tangki 8000L</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-danger float-right">Simpan</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">Daftar Pengembalian</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- card-body -->
                        <div class="card-body">
                          <table id="TabelPengembalian" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Kode Transaksi</th>
                                <th>No Peminjaman</th>
                                <th>No Pengembalian</th>
                                <th>Tanggal</th>
                                <th>Quantity</th>
                                <th>Tanki</th>
                                <th style="width: 10px">Modify</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1224</td>
                                <td>001</td>
                                <td>001</td>
                                <td>28/05/2020</td>
                                <td>290</td>
                                <td>8000L</td>
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
                          <small class="text-muted float-right">Data Peminjaman solar pada tanggal 09/05/2020</small>
                        </div>

                      </div>
                      <!-- akhir content tab pengembalian   -->
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
    $('#TabelPengambilan').DataTable();
    $('#TabelPenerimaan').DataTable();
    $('#TabelPeminjaman').DataTable();
    $('#TabelPengembalian').DataTable();
    $('[data-tolltip="tooltip"]').tooltip({
      trigger: "hover"
    })
  });
</script>