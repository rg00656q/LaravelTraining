@extends('welcome')
@section('content')
    <div class="home_content">
        <div class="discussion_list">
            <div class="header">
                <svg>
                    <use xlink:href="#scorpion" />
                </svg>
                <span>Your Groups</span>
                <a href="/discussions/create">
                    <svg>
                        <use xlink:href="#new-chat" />
                    </svg>
                </a>
            </div>
            @if (count(Auth::user()->discussions))
                <div class="discussion">
                    @foreach (Auth::user()->discussions as $discussion)
                        <a href="/discussions/{{ $discussion->id }}" aria-current="true">
                            <!-- aria current important -->
                            <div class="discussion_header">
                                <strong>{{ $discussion->group_name }}</strong>
                                <small>{{ $discussion->messages->last()->created_at->diffForHumans() }}</small>
                            </div>
                            <div class="last_message">
                                {{ $discussion->messages->last()->content }}
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="error">
                    <svg>
                        <use xlink:href="#ouch" />
                    </svg>
                    <div class="error-msg">
                        <span>No discussion groups found...</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @include('site.layout.guest')
@endsection
