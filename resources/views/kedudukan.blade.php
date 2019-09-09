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
    <link href="{{('/assets/css/glyphicons.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Global site tag (gtag.js) - Google Analytics-->
    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <a class="navbar-brand">
        <img class="navbar-brand-full" src="{{('/assets/img/brand/logoresmi.png')}}" width="150" height="40" alt="KAI Logo" href="/kedudukan">
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
            <!-- /.row-->
              
              <div class="container">
            <div class="card mt-3">
                <div class="card-header text-center">
                    Data Inventaris Berdasarkan Kedudukan
                </div>
                <div class="card-body">
                <form action="/kedudukan" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control col-sm-3" name="kedudukan"
                                placeholder="Cari Kedudukan"> <span class="input-group-btn">
                                <span class="input-group-btn">
                                <button style="margin-left:10px;" type="submit" class="btn btn-success">Cari</button>
                                </button>
                            </span>
                            <a href="/export_excel" class="btn btn-md btn-success" target="_blank">
                    <span class="fa fa-download"> Download </span>
                    </a>
                    <span onclick="myFunction()" class="btn btn-md btn-success" target="_blank" data-toggle="modal" data-target="#importExcel">
                    <a class="fa fa-upload"> Import </a>
                    </span>  
                    </div>
                </form>
                        <form id="myDIV" class="collapse" method="post" action="/import_excel" enctype="multipart/form-data" style="margin:10px 0 0 0">
                          <div class="modal-content">
                            <div class="modal-body">
                        
                              {{ csrf_field() }}
                                <input type="file" name="file" required="required">
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                          </div>
                        </form>
            <table class="table table-bordered small table-striped mt-3">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>No Inventaris</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Harga Barang/Item</th>
                        <th>Bagian</th>
                        <th>Kedudukan</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($details as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_barang }}</td>
                        <td>{{ $d->no_inventaris }}</td>
                        <td>{{ $d->jumlah }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>Rp{{ $d->harga_barang_item }}</td>
                        <td>{{ $d->bagian }}</td>
                        <td>{{ $d->kedudukan }}</td>
                        <td>
                            <form action="{{ route('kedudukan.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('kedudukan.edit',$d->id) }}" class=" btn btn-sm btn-primary">
                                <span class="fa fa-pencil"></span>
                                </a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">
                                <span class="fa fa-trash"></span>
                                </button>
                                <a target="_blank"href="{{ route('tabel.show',$d->id) }}" class=" btn btn-sm btn-success">
                                <span class="fa fa-print"></span>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $details->render() !!}
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
    <script>
            function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
            }
        </script>
  </body>
</html>
