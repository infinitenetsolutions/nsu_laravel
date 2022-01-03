<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    function url()
    {
        return "http://127.0.0.1:8002/upload/";
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  
}
