@extends('welcome')
@section('content')
    <div class="home_content">
        <div class="form">
            <div class="formelt">
                <div class="title">
                    Your informations
                </div>
                <form action="/settings" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="details">
                        <div class="input-box">
                            <label for="name">Username</label>
                            <input type="text" name="name" id="name" placeholder="Enter your username"
                                value="{{ $user->name }}" required>
                        </div>
                        <div class="input-box">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter your password"
                                value="{{ $user->password }}" required>
                        </div>
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter your email adress"
                                value="{{ $user->email }}" required>
                        </div>
                        <div class="input-box">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" id="first_name" placeholder="Enter your first name"
                                value="{{ $user->first_name }}">
                        </div>
                        <div class="input-box">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Enter your last name"
                                value="{{ $user->last_name }}">
                        </div>
                        <div class="input-box">
                            <label for="job">Job</label>
                            <input type="text" name="job" id="job" placeholder="Specify your job"
                                value="{{ $user->job }}">
                        </div>
                        <div class="input-box">
                            <label for="name">Avatar</label>
                            <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('site.layout.guest')
@endsection
