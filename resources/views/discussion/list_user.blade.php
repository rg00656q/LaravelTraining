@extends('layouts.master')
@section('content')
    <div class="home_content">

        {{-- Liste et actions sur les utilisateurs --}}
        <div class="user_list">
            <ul>
                @foreach ($discussion->users as $user)
                    <li>{{ $user->name }} [
                        @if ($discussion->users->where('id', Auth::user()->id)->first()->pivot->role == 'manager' && Auth::user()->id != $user->id)
                            @if ($user->pivot->role == 'user')
                                <form action="/discussions/{{ $discussion->id }}/{{ $user->id }}" method="post">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="submit" value="Promote" />
                                </form>
                            @else
                                <form action="/discussions/{{ $discussion->id }}/{{ $user->id }}" method="post">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="submit" value="Demote" />
                                </form>
                            @endif
                            <form action="/discussions/{{ $discussion->id }}/{{ $user->id }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Remove" />
                            </form>
                        @else
                            {{ $user->pivot->role }}
                        @endif
                        ]
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Ajout d'un nouvel utilisateur a la conversation --}}
        <div class="form">
            <div class="formelt">
                <div class="title">
                    Add someone to the Conversation
                </div>
                <form action="/discussions/{{ $discussion->id }}/users" method="POST">
                    @csrf
                    <div class="details">
                        <div class="input-box">
                            <span>Add by username</span>
                            <input type="text" name="name" id="name" placeholder="Enter their username">
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
    <script></script>
@endsection
