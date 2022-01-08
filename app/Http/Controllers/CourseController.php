<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index($course, $id)
    {
        $programs = DB::table('course_tbl')->where('is_deleted',1)->distinct()->get(['program']);
        $data = DB::table('course_details')->where('course_id', $id)->get();
        return view('course-details', ['data' => $data[0], 'name' => $course, 'programs' => $programs, 'url' => $this->url()]);
    }
}
