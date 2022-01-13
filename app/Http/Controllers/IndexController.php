<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {

        // currently not in use because of that time running video 
        $slider = DB::table('slider_tbl')->get();

        // first of the home page after the slider video
        $about = DB::table('pages')->get();

        // university head  after video tour and upcoming events 
        $head_of_university = DB::table('faculty_tbl')->where('type', 'hou')->limit(4)->get();

        // testimonial section
        $testimonial = DB::table('testimonial_tbl')->get();

        // gallery 
         $gallery=DB::table('gallery_tbl')->orderBy('id','desc')->limit(12)->get();

        return view('index', ['sliders' => $slider, 'url' => $this->url(), 'about' => $about[0],'hou'=>$head_of_university,'testimonials'=>$testimonial,'gallery'=>$gallery]);
    }
}
