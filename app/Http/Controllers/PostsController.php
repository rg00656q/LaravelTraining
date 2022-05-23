<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        //dd(request()->all());

        /*
        // create a new post
        $post = new Post;
        // set the values
        $post->title = request('title');
        $post->body = request('body');
        // save it in the db
        $post->save();
        // redirect to the home page
        return redirect('/posts');
        */


        // AN OTHER WAY TO DO IT
        /*
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        ATTENTION IT PRODUCEST A MassAssignmentException
            => often made by the line Post::create(request()->all());
                -> People can add inputs which can be dangerous if the change the id of a billing or an email
            We need to do validation
                For that we continue in the Post MODEL
        */
        /*
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        */
        Post::create(request(['title', 'body']));
        return redirect('/posts');
    }
}
