<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SINKA</title>
    <!-- Icons-->
    <link rel="icon" type="image/png" href="{{('/assets/img/logokai.png')}}" sizes="any" />
    <link href="{{('/assets/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Global site tag (gtag.js) - Google Analytics-->
    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand">
        <img class="navbar-brand-full" src="{{('/assets/img/brand/logoresmi.png')}}" width="150" height="40" alt="KAI Logo" href="/tabel">
        
      </a>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-5">
        <a class="nav-link" href="/tabel">Sistem Pendataan Inventaris</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link mr-5 font-weight-bold" href="{{ url('/logout') }}"> Keluar </a>
      </li>
      </ul>
      
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
          <li class="nav-title">Tambah Data</li>
            <li class="nav-item">
              <a class="nav-link" href="/tambah">
                <i class="nav-icon fa fa-plus-square" style="color:white"></i> Tambah        
              </a>
            </li>
            <li class="nav-title">Data</li>
            <li class="nav-item">
              <a class="nav-link" href="/tahun">
                <i class="nav-icon fa fa-calendar" style="color:white"></i> Tahun</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bagian">
                <i class="nav-icon fa fa-puzzle-piece" style="color:white"></i> Bagian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kedudukan">
                <i class="nav-icon fa fa-building" style="color:white"></i> Kedudukan</a>
            </li>
            
              </ul>
            </li>
            
          </ul>
        </nav>
      </div>
      <main class="main">
        <div class="container-fluid">
              <div class="container">
            <div class="card mt-3">
            @if(Session::has('alert-success'))
                <div class="alert alert-warning">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
                <div class="card-header text-center">
                    Tambah Data Inventaris
                </div>
                <div class="card-body">
                    <br/>
                    <form autocomplete="off" action="{{ route('tabel.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="nama_barang" type="text" class="form-control" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_inventaris" class="col-sm-3 col-form-label">No Inventaris</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="no_inventaris" type="text" class="form-control" id="no_inventaris">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="jumlah" type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="satuan" type="text" class="form-control" id="satuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_barang_item" class="col-sm-3 col-form-label">Harga Barang/Item</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="harga_barang_item" type="text" class="form-control" id="harga_barang_item">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bagian" class="col-sm-3 col-form-label">Bagian</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="bagian" type="text" class="form-control" id="bagian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kedudukan" class="col-sm-3 col-form-label">Kedudukan</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="kedudukan" type="text" class="form-control" id="kedudukan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-9">
                            <input autocomplete="off" name="tahun" type="text" class="form-control" id="tahun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-md btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
                </div>
        </div>
              
                
            
          </div>
        </div>
      </main>

    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="{{url('js/main.js')}}"></script>
  </body>
</html>
