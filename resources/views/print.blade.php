<!doctype html>
<html>
    <head>
        <style>
        @page { margin: 25px 10px 5px 65px;
            z-index: 1;  }
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ public_path('/assets/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ public_path('/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{ public_path('/assets/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
        <title>SINKA</title>
    </head>
    <body>
    <header>
        @foreach($details as $datas)
            <table class="table table-bordered mx-auto" style="width:330px;font-size:10pt;">
                <tbody>
                <tr>
                    <th colspan="2" class="table-sm mx-auto text-center align-middle">
                        <?php
                        $data = $datas->no_inventaris;
                        echo '<img class="text-center" src="data:image/png;base64,' . DNS1D::getBarcodePNG("$data", "C128",0.95,20) . '" alt="barcode"   />';
                        ?>
                    </th>
                </tr>
                <tr class="table-sm">
                    <td class="text-center align-middle" style="width:30%">
                    <img src="{{ public_path('/assets/img/brand/kai_logo.svg.png')}}" width="40" height="25">
                    </td>
                    <th class="align-middle font-weight-bold" style="padding-left:10px;font-size:6pt;">JENIS BARANG: {{ $datas->nama_barang }}</th>
                    <tr class="table-sm">
                        <th colspan="2" class="font-weight-bold text-center" style="font-size:7pt;">
                        {{ $datas->no_inventaris }}
                            <br>
                            <a class="font-weight-bold text-primary" style="font-size:6pt;">DAOP 6 YOGYAKARTA</a>
                        </th>
                </tr>
                </tbody>
            </table>
        @endforeach 
        </header>
    </body>
</html>