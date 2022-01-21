<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function main_index()
    {

        // currently not in use because of that time running video 
        $slider = DB::table('slider_tbl')->get();

        // first of the home page after the slider video
        $about = DB::table('pages')->get();

        // university head  after video tour and upcoming events 
        $head_of_university = DB::table('faculty_tbl')->where('type', 'hou')->orderBy('designation','ASC')->limit(4)->get();

        // testimonial section
        $testimonial = DB::table('testimonial_tbl')->get();

        // gallery 
        $gallery = DB::table('gallery_tbl')->orderBy('id', 'desc')->limit(12)->get();

        //  latest news 
        $latest_news = DB::table('latestnews_tbls')->orderBy('id', 'desc')->limit(5)->get();

        // getting all events
        $event = DB::table('event')->orderBy('id', 'desc')->limit(4)->get();

        // notice board
        // getting all events
        $noticeboard = DB::table('noticeboard')->orderBy('id', 'desc')->limit(4)->get();

        return view('index-main', ['sliders' => $slider, 'url' => $this->url(), 'about' => $about, 'hou' => $head_of_university, 'testimonials' => $testimonial, 'gallery' => $gallery, 'news' => $latest_news, 'events' => $event, 'noticeboard' => $noticeboard]);
    }

    function index(){
        return view("index",['url' => $this->url()]);
    }
}
