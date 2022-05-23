@extends('layouts.master')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>{{ $post->title }}</h1>
        {{ $post->body }}
        <hr>
        @include('posts.comments')
    </div>
    @include('layouts.sidebar')
@endsection
