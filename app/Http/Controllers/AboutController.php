<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index($name)
    {

        $data = DB::table('pages')->where('page_type', 'about')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'about')->get();
        return view('about', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url()]);
    }
}
