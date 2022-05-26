<?php

namespace App\Http\Controllers;

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
        $success = false;
        $user_id = Auth::user()->id;
        DB::beginTransaction();
        try{
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

        }catch(\Exception $e){
            echo 'something went wrong';
            die();
        }
        if($success){
            DB::commit();
            return view('site.discussion.index')->withSuccessMessage('Reussite');
        }else{
            DB::commit();
            return view('site.discussion.index')->withErrorMessage('Echec');
        }
    }
}
