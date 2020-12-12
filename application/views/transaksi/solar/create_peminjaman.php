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
        <h2 class="card-title pt-1">Input Peminjaman Solar</h2>
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