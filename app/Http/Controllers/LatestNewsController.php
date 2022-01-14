<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    function index($id)
    {
        //  latest news 
        $get_news = DB::table('latestnews_tbls')->where('id', $id)->get();

        $latest_news = DB::table('latestnews_tbls')->orderBy('id', 'desc')->limit(20)->get();

        return view('blog-details', [ 'url' => $this->url(), 'news'=>$latest_news, 'get_news'=>$get_news[0] ]);
    }
}