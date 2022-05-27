@extends('layouts.master')
@section('content')
    <div class="home_content">
        <div class="form">
            <div class="formelt">
                <div class="title">
                    Add someone to the Conversation
                </div>
                <form action="/discussions/{{ $discussion->id }}/add" method="POST">
                    @csrf
                    <div class="details">
                        <div class="input-box">
                            <span>Add by username</span>
                            <input type="text" name="name" id="name" placeholder="Enter their username">
                        </div>
                        <div class="input-box">
                            <span>Add by email adress</span>
                            <input type="text" name="email" id="email" placeholder="Enter their email">
                        </div>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" name="submit" value="Add a friend">
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
    <script>
        $('#avatar input').change(function() {
            $('#avatar').prop(class = 'valid', $('#avatar').val());
        });
    </script>
@endsection
