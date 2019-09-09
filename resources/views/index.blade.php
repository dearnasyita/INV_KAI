<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Sistem Pendataan Inventaris</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
                <div class="card-header text-center">
                    Data Inventaris
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" style="color:white;">Tambah Data</a>
                    <br/>
                    <br/>
                    <form action="{{ route('inventaris.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input name="nama_barang" type="text" class="form-control" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_inventaris" class="col-sm-3 col-form-label">No Inventaris</label>
                        <div class="col-sm-9">
                            <input name="no_inventaris" type="text" class="form-control" id="no_inventaris">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input name="jumlah" type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-9">
                            <input name="satuan" type="text" class="form-control" id="satuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_barang_item" class="col-sm-3 col-form-label">Harga Barang/Item</label>
                        <div class="col-sm-9">
                            <input name="harga_barang_item" type="text" class="form-control" id="harga_barang_item">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bagian" class="col-sm-3 col-form-label">Bagian</label>
                        <div class="col-sm-9">
                            <input name="bagian" type="text" class="form-control" id="bagian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kedudukan" class="col-sm-3 col-form-label">Kedudukan</label>
                        <div class="col-sm-9">
                            <input name="kedudukan" type="text" class="form-control" id="kedudukan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <br>
        </div>
    </body>
</html>