<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Solar</h1>
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
      <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Pengambilan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Penerimaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Pengembalian</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-two-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="card mr-3 ml-2 card-primary">
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
                    <div class="card  card-primary mr-2">
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
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Input Pengambilan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                          <div class="card-body">
                            <div class="row">
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
                                <label for="NamaAlat">Quantity</label>
                                <input type="text" class="form-control" id="NamaAlat" name="NamaAlat" placeholder="Enter Nama Alat">
                              </div>
                              <div class="form-group col-6">
                                <label for="Operator">PIC</label>
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
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Daftar Pengambilan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                      <table id="TabelUser" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th>Kode Alat</th>
                            <th>Operator</th>
                            <th>Quantity</th>
                            <th style="width: 10px">Modify</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>28/05/2020</td>
                            <td>MX412</td>
                            <td>Ujang</td>
                            <td>290</td>
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
            </div>
            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
              Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
            </div>
            <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
              Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
            </div>
            <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
              Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
            </div>
          </div>
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