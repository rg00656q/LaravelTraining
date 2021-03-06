@extends('layouts.master')
@section('content')
    <div class="home_content">
        <div class="discussion_list">

            {{-- En-tete des discussions --}}
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

            {{-- Affichage des differents groupes --}}
            @if (count($discussions = Auth::user()->discussions->sortByDesc('updated_at')))
                <div class="discussion">
                    @foreach ($discussions as $discussion)
                        <a href="/discussions/{{ $discussion->id }}" aria-current="true">
                            <!-- aria current important -->
                            <div class="discussion_header">
                                <strong>{{ $discussion->group_name }}</strong>
                                @if (count($discussion->messages))
                                    <small>{{ $discussion->messages->sortBy('created_at')->last()->created_at->diffForHumans() }}</small>
                                @else
                                    <small>{{ $discussion->created_at->diffForHumans() }}</small>
                                @endif
                            </div>
                            <div class="last_message">
                                @if (count($discussion->messages))
                                    {{ $discussion->messages->sortBy('id')->last()->content }}
                                @else
                                    No messages... Yet!
                                @endif
                            </div>
                            <div class="notification">
                                <small>{{ $discussion->notifications }}</small>
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
@endsection
