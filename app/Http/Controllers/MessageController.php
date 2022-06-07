<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Discussion $discussion){
        $this->validate(request(),[
            'content' => 'required'
        ]);
        $message = new Message;
        $message->user_id = Auth::user()->id;
        $message->discussion_id = $discussion->id;
        $message->content = request('content');

        $response = $message->save();
        if($response){
            foreach($discussion->users as $user){
                if(Auth::user()->id != $user->id){
                    $user->notify(new NewMessage($discussion));
                }
            }
        }
        return back();
    }
}
