<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        $user = Auth::user();
        $message = 'Edit your profile';
        return view('settings.edituser', compact('user', 'message'));
    }

    public function store(Request $request){
        $path = $request->file('avatar')->store('public/avatars');

        dd($path);
    }
}
