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