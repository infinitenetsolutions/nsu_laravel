<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CareerController extends Controller
{
    function index()
    {
        $data = DB::table('career_tbl')->get();
        return view('career', ['data' => $data,  'url' => $this->url()]);
    }
    function store(Request $request)
    {
        try {
            DB::table('career_applied')->insert($request->except('_token'));
            return  redirect()->route('career')->with(['massage' => 'Thank you for applying']);
        } catch (Throwable $e) {
            return  redirect()->route('career')->with(['error' => 'You have already applied ']);
        }
    }
}
