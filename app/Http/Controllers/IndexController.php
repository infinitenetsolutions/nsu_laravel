<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $about=Db::table('pages')->get();
        $slider = DB::table('slider_tbl')->get();
        return view('index', ['sliders' => $slider, 'url' => $this->url(),'about'=>$about[0]]);
    }
    
}
