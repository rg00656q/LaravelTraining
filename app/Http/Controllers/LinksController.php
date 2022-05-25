<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('site.dashboard.links', compact('user'));
    }

    public function help(){
        // dd(DB::getSequence());
        return view('site.dashboard.test');
    }
}
