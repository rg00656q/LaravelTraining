<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class LinksController extends Controller
{
    public function index(){
        return view('dashboard.links');
    }

    public function test(){
        // Laravel comprend qu'il s'agit de l'utilisateur
        // Il faut sinon passer un second argument au allows
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        return view('dashboard.test');
    }

    public function blackjack(){
        return view('dashboard.blackjack');
    }

    public function sendMail(){
        if(!Gate::allows('access-admin')){
            abort('403');
        }
        $user = Auth::user();
        Mail::to($user['email'])->send(new ContactMail($user));
        dd('mail sent!');
    }
}
