<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class UserController extends Controller
{
    public function show(){
        $user = Auth::user();
        $message = 'Edit your profile';
        return view('settings.edituser', compact('user', 'message'));
    }

    public function store(Request $request){
        $request->validate([
            'avatar' => 'image',
        ]);
        $user = Auth::user();
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->job = request('job');
        $path = $request->file('avatar')->store('public/avatars');
        $user->avatar_path = $path;
        $user->save();

        $message = 'Edit your profile';
        return redirect(RouteServiceProvider::HOME);
    }
}
