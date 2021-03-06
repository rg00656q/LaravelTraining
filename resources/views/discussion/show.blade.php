@extends('discussion.index')
@section('precision')
    <div class="precision">
        <div class="chat-global">

            {{-- En-tete --}}
            <div class="nav-top">
                <div class="group">
                    <img src="https://avatars.githubusercontent.com/u/32329634?v=4" />
                    <p> {{ $discussion->group_name }} <br>
                        <small> {{ $discussion->description }} </small>
                    </p>
                </div>
                <div class="dropdown">
                    <a id="dropdownlink">
                        <i class="bx bx-dots-horizontal-rounded" title="Settings"></i>&nbsp;
                    </a>
                    <div class="dropdown-menu">
                        <a href="#">
                            <i class='bx bx-info-circle'></i>
                            <p> Infos </p>
                        </a>
                        <a href="/discussions/{{ $discussion->id }}/users">
                            <i class="bx bx-user"></i>
                            <p> Users </p>
                        </a>
                        <a href="#">
                            <i class="bx bx-trash"></i>
                            <p> Delete </p>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Conversation --}}
            <div class="conversation">
                @foreach ($discussion->messages->sortBy('created_at') as $message)
                    @if ($message->user->id == Auth::user()->id)
                        <div class="bubble user" data-is="You - {{ $message->created_at->diffForHumans() }}">
                            <p> {{ $message->content }} </p>
                            @if (Auth::user()->avatar_path == null)
                                <img src="https://rcmi.fiu.edu/wp-content/uploads/sites/30/2018/02/no_user.png"
                                    alt="user_avatar">
                            @else
                                <img src="{{ Storage::url(Auth::user()->avatar_path) }}" alt="user_avatar">
                            @endif
                        </div>
                    @else
                        <div class="bubble them"
                            data-is="{{ $message->user->name }} - {{ $message->created_at->diffForHumans() }}">
                            @if ($message->user->avatar_path == null)
                                <img src="https://rcmi.fiu.edu/wp-content/uploads/sites/30/2018/02/no_user.png"
                                    alt="user_avatar">
                            @else
                                <img src="{{ Storage::url($message->user->avatar_path) }}" alt="user_avatar">
                            @endif
                            <p> {{ $message->content }} </p>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Envoi de messages --}}
            <form action="/discussions/{{ $discussion->id }}" method="POST" class="chat-form">
                @csrf
                <div class="container-inputs">
                    <div class="files-logo-cont">
                        <i class='bx bx-upload'></i>
                    </div>
                    <div class="group-inp">
                        <textarea name="content" placeholder="Enter your message here" minlength="1" maxlength="250"></textarea>
                        <i class='bx bx-smile'></i>
                    </div>
                    <button class="submit-btn">
                        <i class="bx bxs-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let ddbtn = document.querySelector('#dropdownlink');
        let dropd = document.querySelector('.dropdown');
        let dropdm = document.querySelector('.dropdown-menu');

        ddbtn.onclick = function() {
            dropd.classList.toggle("show");
            dropdm.classList.toggle("show");
        }
    </script>
@endsection
