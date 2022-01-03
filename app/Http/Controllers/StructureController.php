<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    function index($name)
    {

        $data = DB::table('pages')->where('page_type', 'infrastructure')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'infrastructure')->get();
        return view('infrastructure', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url()]);
    }
}
