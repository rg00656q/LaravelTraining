@extends('welcome')
@section('content')
    @auth
        <div class="home_content">
            <div class="form">
                <div class="formelt">
                    <div class="title">
                        Your informations
                    </div>
                    <form action="#">
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
                                <label for="name">Username</label>
                                <input type="text" name="name" id="name" placeholder="Enter your username"
                                    value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endauth
    @include('site.layout.guest')
@endsection
