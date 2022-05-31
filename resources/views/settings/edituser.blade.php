@extends('layouts.master')
@section('content')
    <div class="home_content">
        <div class="form">
            <div class="formelt">
                <div class="title">
                    {{ $message }}
                </div>
                <form action="/settings" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="details">
                        <div class="input-box">
                            <span>Username</span>
                            <input type="text" name="name" id="name" placeholder="Enter your username"
                                value="{{ $user->name }}" required>
                        </div>
                        <div class="input-box">
                            <span>Email</span>
                            <input type="text" name="email" id="email" placeholder="Enter your email adress"
                                value="{{ $user->email }}" required>
                        </div>
                        <div class="input-box">
                            <span>Password</span>
                            <input type="password" name="password" id="password" placeholder="Enter your password" value=""
                                required>
                        </div>
                        <div class="input-box">
                            <span>Repeat Password</span>
                            <input type="password" name="password" id="password" placeholder="Repeat your password" value=""
                                required>
                        </div>
                        <div class="input-box">
                            <span>First name</span>
                            <input type="text" name="first_name" id="first_name" placeholder="Enter your first name"
                                value="{{ $user->first_name }}">
                        </div>
                        <div class="input-box">
                            <span>Last name</span>
                            <input type="text" name="last_name" id="last_name" placeholder="Enter your last name"
                                value="{{ $user->last_name }}">
                        </div>
                        <div class="input-box">
                            <span>Job</span>
                            <input type="text" name="job" id="job" placeholder="Specify your job"
                                value="{{ $user->job }}">
                        </div>
                        <div class="input-box">
                            <span>Avatar</span>
                            <div class="button-wrap">
                                <label for="avatar" class="avatarbtn">Image</label>
                                <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" name="submit" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Lignes de code pour verifier que l'image est ajoutee et changer la couleur de la bordure
    </script>
@endsection
