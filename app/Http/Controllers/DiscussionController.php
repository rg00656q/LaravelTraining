<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    public function index(){
        $discussions = Discussion::latest()->get();
        return view('site.discussion.index', compact('discussions'));
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
            'group_name' => 'required|min:5',
            'description' => 'required|min:1'
        ]);
        Discussion::create(request(['group_name', 'description']));
        return redirect('/discussions');
    }
}
