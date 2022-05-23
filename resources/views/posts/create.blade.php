@extends('layouts.master')
@section('content')
    <div class="col-md-8 blog-main">
        <h3>Publish a post</h3>
        <hr>
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="body">body</label>
                <textarea name="body" id="body" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Publish
                </button>
            </div>
        </form>
        @include('layouts.errors')
    </div>
@endsection
