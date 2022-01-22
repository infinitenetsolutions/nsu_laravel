<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function image_gallery()
    {
        $images = DB::table('gallery_tbl')->paginate(12);

        $gallery_title = DB::table('gallery_tbl')
            ->select('title')
            ->groupBy('title')
            ->get();

        return view('image-gallery', ['url' => $this->url(), 'images1' => $images, 'gallery_title' => $gallery_title]);
    }

    function media_gallery()
    {
        $images = DB::table('gallery_tbl')->paginate(9);
        return view('media-gallery', ['url' => $this->url(), 'images' => $images,]);
    }
}
