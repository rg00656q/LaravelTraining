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
        $discussions = Auth::user()->discussions;
        // recuperation des notifications non lues -> ajout a une nouvelle variable sur la discussion
        $unread_notifs = Auth::user()->unreadNotifications;
        $notifications = array();

        foreach($discussions as $discussion){
            $notif_number = 0;
            foreach($unread_notifs as $unread_notif){
                if($unread_notif->data['discussion_id'] == $discussion->id){
                    $notif_number++;
                }
            }
            $discussion->notifications = $notif_number;
        }
        return view('discussion.index');
    }

    public function show(Discussion $discussion){
        $unread_notifs = Auth::user()->unreadNotifications;
        // Remise a zero des notifications lors de la lecture du chat
        foreach($unread_notifs as $unread_notif){
            if($unread_notif->data['discussion_id'] == $discussion->id){
                $unread_notif->markAsRead();
            }
        }
        $discussion->notifications = 0;
        return view('discussion.show', compact('discussion'));
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
            $group->users()->attach($user_id, ['role'=> 'manager']);
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
