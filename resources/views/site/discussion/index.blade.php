@extends('welcome')
@section('content')
    @auth
        <div class="home_content">
            <div class="discussion_list">
                <div class="header">
                    <svg width="30" height="30">
                        <use xlink:href="#scorpion" />
                    </svg>
                    <span style="">Your Groups</span>
                    <a href="/discussions/create" style="">
                        <svg width="30" height="30">
                            <use xlink:href="#new-chat" />
                        </svg>
                    </a>
                </div>
                @if (count($discussions))
                    <div class="discussion">
                        @foreach ($discussions as $discussion)
                            <a href="/discussions/{{ $discussion->id }}" aria-current="true">
                                <!-- aria current important -->
                                <div class="discussion_header">
                                    <strong>{{ $discussion->group_name }}</strong>
                                    <small>Wed</small>
                                </div>
                                <div class="last_message">
                                    {{ $discussion->description }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="error" style="border: solid; border-top-style: none; border-left-style: none">
                        <svg style="margin-left: .5rem" width="50" height="50">
                            <use xlink:href="#ouch" />
                        </svg>
                        <div class="error-msg">
                            <span>No discussion groups found...</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endauth
    @include('site.layout.guest')
@endsection
