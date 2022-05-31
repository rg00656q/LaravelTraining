<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $discussions = Discussion::latest()->get();
        return view('discussion.index', compact('discussions'));
    }

    public function show(Discussion $discussion){
        $discussions = Discussion::latest()->get();
        return view('discussion.show', compact('discussions', 'discussion'));
    }

    public function create(){
        return view('discussion.create');
    }

    public function store(){
        $success = false;
        $user_id = Auth::user()->id;
        DB::beginTransaction();
        $this->validate(request(),[
            'group_name' => 'required|min:5'
        ]);
        $group = new Discussion;
        $group->group_name = request('group_name');
        $group->description = request('description');

        if($group->save()){
            $group->users()->sync($user_id);
            $success = true;
        }
        if($success){
            DB::commit();
            return view('discussion.index');
        }else{
            DB::commit();
            return view('discussion.index')->withErrorMessage('Echec');
        }
    }

    public function adduser(Discussion $discussion){
        return view('discussion.adduser', compact('discussion'));
    }

    public function store_user(Discussion $discussion){
        // Validation
        $this->validate(request(),[
            'name' => 'required',
        ]);

        // la personne y est deja?
        $newuser = User::where('name', request('name'))->first();
        if(!$newuser){
            return back();
        }
        foreach ($discussion->users as $user){
            if($user->id == $newuser->id){
                return back();
            }
        }

        // Ajout de l'utilisateur selon la valeur entree
        $discussion->users()->attach($newuser->id);
        return back();

    }
}
