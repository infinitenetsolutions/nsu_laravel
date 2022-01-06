<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PlacementController extends Controller
{

    function index($name)
    {

        $data = DB::table('pages')->where('page_type', 'placement')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'placement')->get();
        return view('placement', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url()]);
    }
    // showing the data fo appointment
    function appointment()
    {
        $data = DB::table('appointment_tbl')->paginate(8);
        return view('appointment', ['data' => $data,  'url' => $this->url()]);
    }
    
    // showing the data fo requiters

    function requiters()
    {

        $data = DB::table('recruiters_tbl')->get();
        $categories=DB::table('recruiters_tbl')->distinct()->get(['title']);  
        return view('requiters', ['data' => $data, 'categories' => $categories, 'url' => $this->url()]);
    }
}
