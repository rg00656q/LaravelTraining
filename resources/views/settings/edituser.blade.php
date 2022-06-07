@extends('layouts.master')
@section('content')
    {{-- Formulaire pour changer ses informations, 2 versions --}}
    <div class="home_content">
        {{-- Version 1 => pour les infromations simples --}}
        <div class="form">
            <div class="formelt">
                <div class="title">
                    {{ $message }}
                </div>
                <form action="/user" method="POST" enctype="multipart/form-data" id="user-form-elt">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="details">
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
                @include('layouts.errors')
            </div>
        </div>

        {{-- Version 2 => email, mdp et username --}}
    </div>
@endsection
