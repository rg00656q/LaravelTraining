<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    public function index(){
        return view('dashboard.links');
    }

    public function help(){
        return view('dashboard.test');
    }
}
