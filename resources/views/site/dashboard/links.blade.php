@extends('welcome')

@section('content')
    <style>
        .links {
            flex: 0 0 auto;
            width: 100%;
        }

        .links a {
            text-decoration: none;
            color: #fff;
            margin-left: 1.5rem;
        }

    </style>
    <div class="links">
        <div class="work">
            <button id="wlb" class="btn btn-primary">Work</button>
            <ul class="mybg">
                <li>
                    <a class="nav-link text-black" href="{{ route('blog') }}" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#blog" />
                        </svg>
                        <span class="item">Blog</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link text-black" href="https://github.com/rg00656q" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#git" />
                        </svg>
                        <span class="item">GitHub</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link text-black" href="#" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#pole-emploi" />
                        </svg>
                        <span class="item">Pole Emploi</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link text-black" href="/help" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#scorpion" />
                        </svg>
                        <span class="item">Aide</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="social">
            <button id="slb">Social</button>
            <ul class="mybg" style="border-radius: 6px; list-style: none;">
                <li>
                    <a class="nav-link text-black" href="http://www.youtube.com" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#youtube" />
                        </svg>
                        <span class="item">Youtube</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link text-black" href="http://www.twitter.com/" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#twitter" />
                        </svg>
                        <span class="item">Twitter</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link text-black" href="http://www.twitch.com/directory/following" target="_blank">
                        <svg class="me-2" width="20" height="20">
                            <use xlink:href="#twitch" />
                        </svg>
                        <span class="item">Twitch</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        let wlb = document.querySelector("#wlb");
        let work = document.querySelector(".work");
        let slb = document.querySelector("#slb");
        let social = document.querySelector(".social");

        wlb.onclick = function() {
            work.classList.toggle("active");
        }

        slb.onclick = function() {
            social.classList.toggle("active");
        }

        function openInNewTab(url) {
            window.open(url, '_blank').focus();
        }
    </script>
@endsection
