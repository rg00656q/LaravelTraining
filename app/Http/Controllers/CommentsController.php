<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  // to recieve the post
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Post $post){
        //dd(request()->all());

        // $c = new Comment;
        // $c->body = request('body');
        // $c->post_id = $post->id;
        // $c->save();

        // We could do like for adding a post
        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $post->id
        // ]);
        // Or we could make a method in post to add a comment

        //Validation
        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);
        // add comment method
        $post->addComment(request('body'));
        return back();
    }
}
