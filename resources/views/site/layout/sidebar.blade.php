<div class="sidebar">
    <div class="logo_content">
        <a href="/" class="logo">
            <svg width="25" height="25">
                <use xlink:href="#scorpion" />
            </svg>
            <span class="logo_name">Home</span>
        </a>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <i class='bx bx-search-alt-2' id="searchBtn"></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="/links">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user'></i>
                <span class="link_name">User</span>
            </a>
            <span class="tooltip">User</span>
        </li>
        <li>
            <a href="/discussions">
                <i class='bx bxs-chat'></i>
                <span class="link_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="link_name">Analitics</span>
            </a>
            <span class="tooltip">Analitics</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-folder'></i>
                <span class="link_name">File Manager</span>
            </a>
            <span class="tooltip">Files</span>
        </li>
        <li>
            <a href="{{ route('settings') }}">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            @auth
                @if (Auth::user()->avatar_path == 'none')
                    <img src="https://rcmi.fiu.edu/wp-content/uploads/sites/30/2018/02/no_user.png" alt="user_avatar"
                        id="user_ico">
                @else
                    <img src="{{ Auth::user()->avatar_path }}" alt="user_avatar" id="user_ico">
                @endif
                <div class="profile_details">
                    <div class="name">Romero Guillaume</div>
                    <div class="job">Web Designer</div>
                </div>
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
                <img src="https://rcmi.fiu.edu/wp-content/uploads/sites/30/2018/02/no_user.png" alt="user_avatar"
                    id="user_ico">
                <div class="profile_details">
                    <div class="name">Please log in</div>
                    <div class="job"></div>
                </div>
                <div class="icons">
                    <a href="{{ route('register') }}">
                        <span class="tooltip">Register</span>
                        <i class='bx bx-door-open' id="register"></i>
                    </a>
                    <a href="{{ route('login') }}">
                        <span class="tooltip">Log in</span>
                        <i class='bx bx-log-in' id="login"></i>
                    </a>
                </div>
            @endguest


        </div>
    </div>
</div>

<script>
    let btn = document.querySelector("#btn");
    let searchBtn = document.querySelector("#searchBtn");
    let user_icoBtn = document.querySelector("#user_ico");

    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.parentElement.classList.toggle("sb_active");
    }

    searchBtn.onclick = function() {
        sidebar.parentElement.classList.toggle("sb_active");
    }

    user_icoBtn.onclick = function() {
        sidebar.parentElement.classList.toggle("sb_active");
    }
</script>
