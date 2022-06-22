<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\GetNotificationsEvent;
use App\Events\ReadNotificationsEvent;

class DiscussionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $discussions = Auth::user()->discussions;
        event(new GetNotificationsEvent($discussions));

        //eager loading /  13 queries => 5 queries
        $discussions = Discussion::with('messages')->whereIn('id', $discussions->pluck('id'))->get();

        return view('discussion.index', compact('discussions'));
    }

    public function show(Discussion $discussion){
        event(new ReadNotificationsEvent($discussion));

        // Eager Loading /  23 queries => 8 queries
        $discussions = Discussion::with('messages')->whereIn('id', Auth::user()->discussions->pluck('id'))->get()->sortByDesc('updated_at');
        $messages = Message::with('user')->where('discussion_id', $discussion->id)->get();

        return view('discussion.show', compact('discussions', 'discussion', 'messages'));
    }

    // Creation d'un nouveau groupe de discussion
    public function create(){
        return view('discussion.create');
    }
    public function store(){
        $this->validate(request(),[
            'group_name' => 'required|min:5'
        ]);

        $group = new Discussion;
        $group->group_name = request('group_name');
        $group->description = request('description');

        if($group->save()){
            $group->users()->attach(Auth::user()->id, ['role'=> 'manager']);
        }

        return view('discussion.index');
    }

    // Affichage des membres du groupe
    public function list_user(Discussion $discussion){
        return view('discussion.list_user', compact('discussion'));
    }

    // Ajout d'un membre a la discussion
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
        $discussion->users()->attach($newuser->id, ['role' => 'user']);
        return back();
    }

    // Change le status d'un membre de la discussion
    public function update_role(Discussion $discussion, User $user){
        if($discussion->users->where('id', $user->id)->first()->pivot->role == 'user'){
            $discussion->users()->UpdateExistingPivot($user->id, [
                'role' => 'manager',
            ]);
        }else{
            $discussion->users()->UpdateExistingPivot($user->id, [
                'role' => 'user',
            ]);
        }
        return back();
    }

    // Retire un membre de la discussion
    public function destroy(Discussion $discussion, User $user){
        $discussion->users()->detach($user->id);
        return back();
    }
}
