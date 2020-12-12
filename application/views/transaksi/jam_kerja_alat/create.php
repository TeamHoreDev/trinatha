<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Jam Kerja Alat</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Jam Kerja Alat</a></li>
            </ol>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-6">
        <div class="card card-navy">
            <div class="card-header">
                <h2 class="card-title pt-1">Input Jam Kerja Alat</h2>
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