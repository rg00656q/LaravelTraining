@extends('layouts.master')
@section('content')
    <div class="col-md-8 blog-main">

        <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>
        @foreach ($posts as $post)
            @include('posts.post')
        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary" href="#">Newer</a>
            <a class="btn btn-outline-primary" href="/posts/create" style="float: right">
                Create
            </a>
        </nav>
    </div>
    @include('layouts.sidebar')
@endsection
