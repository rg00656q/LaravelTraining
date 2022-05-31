<div class="profile_content">
    <div class="profile_actions">
        @auth
            <div class="icons logoutbtn">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <i class='bx bx-log-out' id="logout"></i>
                </a>
            </div>
        @endauth
        @guest
            <div class="icons">
                <a href="{{ route('register') }}">
                    <i class='bx bx-door-open' id="register"></i>
                    <span class="tooltip">Register</span>
                </a>
                <a href="{{ route('login') }}">
                    <span class="tooltip">Log in</span>
                    <i class='bx bx-log-in' id="login"></i>
                </a>
            </div>
        @endguest
    </div>
    <div class="profile">
        @auth
            @if (Auth::user()->avatar_path)
                <img src="{{ Storage::url(Auth::user()->avatar_path) }}" alt="user_avatar" id="user_ico">
            @else
                <img src="https://rcmi.fiu.edu/wp-content/uploads/sites/30/2018/02/no_user.png" alt="user_avatar"
                    id="user_ico">
            @endif
            <div class="profile_details">
                @if (Auth::user()->first_name || Auth::user()->last_name)
                    <div class="name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
                @else
                    <div class="name">{{ Auth::user()->name }}</div>
                @endif
                @if (Auth::user()->job)
                    <div class="job">{{ Auth::user()->job }}</div>
                @else
                    <div class="job"></div>
                @endif
            </div>
        @endauth
        @guest
            <img src="https://rcmi.fiu.edu/wp-content/uploads/sites/30/2018/02/no_user.png" alt="user_avatar" id="user_ico">
            <div class="profile_details">
                <div class="name">Please log in</div>
                <div class="job"></div>
            </div>
        @endguest
    </div>
</div>
