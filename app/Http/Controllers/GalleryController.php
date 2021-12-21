<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function image_gallery()
    {
   $images = DB::table('gallery_tbl')->get();

        $gallery_title = DB::table('gallery_tbl')
            ->select('gallery_title')
            ->groupBy('gallery_title')
            ->get();
        return view('image-gallery', ['url' => url(), 'images' => $images,'gallery_title'=>$gallery_title]);
    }
}
