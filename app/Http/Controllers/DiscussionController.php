<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function index(){
        $user = Auth::user();
        // $discussions = Discussion::latest()->get();
        return view('site.discussion.index', compact('user'));
    }

    public function show($id){
        $discussions = Discussion::latest()->get();
        $discussion = Discussion::findOrFail($id);
        return view('site.discussion.show', compact('discussions', 'discussion'));
    }

    public function create(){
        return view('site.discussion.create');
    }

    public function store(){
        $this->validate(request(),[
            'group_name' => 'required|min:5'
        ]);
        Discussion::create(request(['group_name', 'description']));
        return redirect('/discussions');
    }
}
