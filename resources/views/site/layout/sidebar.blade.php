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
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <img src="https://avatars.githubusercontent.com/u/32329634?v=4" alt="user_avatar">
            <div class="profile_details">
                <div class="name">Romero Guillaume</div>
                <div class="job">Web Designer</div>
            </div>
            <i class='bx bx-log-out' id="log_out"></i>
        </div>
    </div>
</div>

<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector("#searchBtn");

    btn.onclick = function() {
        sidebar.parentElement.classList.toggle("sb_active");
    }

    searchBtn.onclick = function() {
        sidebar.parentElement.classList.toggle("sb_active");
    }
</script>
