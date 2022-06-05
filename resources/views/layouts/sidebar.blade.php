<div class="sidebar">
    {{-- En-tete de la sidebar --}}
    <div class="logo_content">
        <a href="{{ route('home') }}" class="logo">
            <svg width="25" height="25">
                <use xlink:href="#scorpion" />
            </svg>
            <span class="logo_name">Home</span>
        </a>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    {{-- Liste d'outils pour acceder aux contenus --}}
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
            <a href="{{ route('userinfo') }}">
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
    @include('layouts.userbar')
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
