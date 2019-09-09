<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tambah');
    }

    public function demoGeneratePDF($id)
    {
        //$details = ModelInventaris::where('id',$id)->get();
    $details = ModelInventaris::where('id',$id)->get();
    $pdf = PDF::loadView('print', $details);

    return $pdf->stream('demo.pdf');
    }
}
