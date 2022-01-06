<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    function index()
    {
        $data = DB::table('career_tbl')->get();
        return view('career', ['data' => $data,  'url' => $this->url()]);
    }
}
