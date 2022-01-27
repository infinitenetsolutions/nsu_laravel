<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class GetStartController extends Controller
{
    function store(Request $request)
    {
        // try{
        DB::table('get_start')->insert($request->except('_token'));
        return redirect()->back()->with('success', 'Thank you Connecting with us');
        // }catch(Throwable $e){
        //     return redirect()->back()->with('error', 'Something went wrong');

        // }
    }
}
