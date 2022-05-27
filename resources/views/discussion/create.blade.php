@extends('layouts.master')

@section('content')
    <div class="home_content">
        <div class="form">
            <div class="formelt">
                <div class="title">
                    Create a group
                </div>
                <form action="/discussions" method="POST">
                    @csrf
                    <div class="details">
                        <div class="input-box">
                            <span>
                                Group name
                            </span>
                            <input type="text" name="group_name" id="group" placeholder="Enter the group name" required>
                        </div>
                        <div class="input-box">
                            <span>description</span>
                            <input type="text" name="description" id="description" placeholder="Group description">
                        </div>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" name="submit" value="Create">
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection
