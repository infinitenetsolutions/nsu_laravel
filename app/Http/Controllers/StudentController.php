<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    function index($name)
    {
        
        $data = DB::table('pages')->where('page_type', 'student')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'student')->get();
        return view('student', ['data' => $data[0], 'quicks' => $quick_link,'url'=>$this->url()]);
    }
}
