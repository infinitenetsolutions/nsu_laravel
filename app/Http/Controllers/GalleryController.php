<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function image_gallery()
    {
        $images = DB::table('gallery_tbl')->orderBy('id','desc')->where(DB::raw('LENGTH(link)'),'>','30')->paginate(12);

        $gallery_title = DB::table('gallery_tbl')
        ->where('title','!=','Media')
        
            ->select('title')
            ->groupBy('title')
            ->orderBy('id','desc')
            ->get();

        return view('image-gallery', ['url' => $this->url(), 'images1' => $images, 'gallery_title' => $gallery_title]);
    }

    function media_gallery()
    {
        $images = DB::table('gallery_tbl')->where('title','=','media')->orderBy('id','desc')->paginate(9);
        return view('media-gallery', ['url' => $this->url(), 'images' => $images,]);
    }
}
