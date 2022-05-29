<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    public function index(){
        return view('dashboard.links');
    }

    public function test(){
        return view('dashboard.test');
    }

    public function blackjack(){
        return view('dashboard.blackjack');
    }
}
