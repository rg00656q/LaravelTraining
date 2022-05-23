<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(){
        return view('site.dashboard.links');
    }

    public function help(){
        // dd(DB::getSequence());
        return view('site.dashboard.test');
    }
}
