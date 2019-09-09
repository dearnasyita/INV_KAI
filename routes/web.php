<?php
Use App\ModelInventaris;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::group(['middleware' => ['auth']], function() {
Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('tabel', 'kai');

Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/print', function () {
    return view('print');
});

Route::resource('kedudukan', 'kedudukan');
Route::any ( '/kedudukan', function () {
	$kedudukan = Input::get ( 'kedudukan' );
    if($kedudukan == ""){
        $details = ModelInventaris::orderBy('id', 'desc')->paginate (5)->setPath ( '/kedudukan' );
		return view ( 'kedudukan', compact('details') );
		$pagination = $data->appends ( array (
			'kedudukan' => Input::get ( 'kedudukan' ) 
		  ) );
    }
    if($kedudukan != ""){
		$data = ModelInventaris::where ( 'kedudukan', 'LIKE', '%' . $kedudukan . '%' )->orderBy('id', 'desc')->paginate (5)->setPath ( '/kedudukan' );
		$pagination = $data->appends ( array (
			'kedudukan' => Input::get ( 'kedudukan' ) 
		  ) );
		if (count ( $data ) > 0)
			return view ( 'kedudukan' )->withDetails ( $data )->withQuery ( $kedudukan );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('tahun', 'tahun');
Route::any ( '/tahun', function () {
	$tahun = Input::get ( 'tahun' );
    if($tahun == ""){
		$details = ModelInventaris::orderBy('id', 'desc')->paginate (5)->setPath ( '/tahun' );
		return view ( 'tahun', compact('details') );
		$pagination = $data->appends ( array (
			'tahun' => Input::get ( 'tahun' ) 
		  ) );
    }
    if($tahun != ""){
		$data = ModelInventaris::where ( 'tahun', 'LIKE', '%' .$tahun. '%' )->orderBy('id', 'desc')->paginate (5)->setPath ( '/tahun' );
		$pagination = $data->appends ( array (
			'tahun' => Input::get ( 'tahun' ) 
		  ) );
		if (count ( $data ) > 0)
			return view ( 'tahun' )->withDetails ( $data )->withQuery ( $tahun );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('bagian', 'bagian');
Route::any ( '/bagian', function () {
	$bagian = Input::get ( 'bagian' );
    if($bagian == ""){
		$details = ModelInventaris::orderBy('id', 'desc')->paginate (5)->setPath ( '/bagian' );
        return view ( 'bagian', compact('details') );
		$pagination = $data->appends ( array (
			'bagian' => Input::get ( 'bagian' ) 
		  ) );
	}
    if($bagian != ""){
		$data = ModelInventaris::where ( 'bagian', 'LIKE', '%' .$bagian. '%' )->orderBy('id', 'desc')->paginate (5)->setPath ( '/bagian' );
		$pagination = $data->appends ( array (
			'bagian' => Input::get ( 'bagian' ) 
		  ) );
		if (count ( $data ) > 0)
			return view ( 'bagian' )->withDetails ( $data )->withQuery ( $bagian );
		else
			return view ( 'error' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'kai/error' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/print', 'kai@print');
Route::get('/print_kedudukan', 'kedudukan@print');


Route::get('/index', 'HomeController@index')->name('index');

Route::get('/tabel', 'kai@export');
Route::get('/export_excel', 'kai@export_excel');
Route::post('/import_excel', 'kai@import_excel');
});
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
