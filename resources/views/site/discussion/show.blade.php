@extends('site.discussion.index')
@section('precision')
    <div class="precision">
        <div class="chat-global">
            <div class="nav-top">
                <div class="group">
                    <img src="https://avatars.githubusercontent.com/u/32329634?v=4" />
                    <p> Friends <br>
                        <small> Friend group </small>
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
                        <a href="#">
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

            <div class="conversation">
                <div class="bubble user" data-is="You - 3:30">
                    <p> Lorem ipsum dolor sit amet. </p>
                    <img src="{{ asset('pfp/Shiyuu.jpg') }}" alt="Shu">
                </div>
                <div class="bubble them" data-is=" - ">
                    <img src="{{ asset('pfp/ShuJiii.jpg') }}" alt="Jiii">
                    <p> Lorem ipsum dolor sit amet. </p>
                </div>
                <div class="bubble user" data-is="You - 3:42">
                    <p> Lorem ipsum dolor sit amet. </p>
                    <img src="{{ asset('pfp/Shiyuu.jpg') }}" alt="Shu">
                </div>
                <div class="bubble them" data-is=" - ">
                    <img src="{{ asset('pfp/ShuJiii.jpg') }}" alt="Jiii">
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing. </p>
                </div>
                <div class="bubble user" data-is="You - 5:01">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet odio quibusdam sapiente accusamus
                        dolorum.
                    </p>
                    <img src="{{ asset('pfp/Shiyuu.jpg') }}" alt="Shu">
                </div>
                <div class="bubble them" data-is=" - 5:03">
                    <img src="{{ asset('pfp/ShuJiii.jpg') }}" alt="Jiii">
                    <p> Lorem ipsum dolor sit amet. </p>
                </div>
                <div class="bubble user" data-is="You - 5:05">
                    <p> Lorem ipsum dolor sit amet. </p>
                    <img src="{{ asset('pfp/Shiyuu.jpg') }}" alt="Shu">
                </div>
                <div class="bubble them" data-is=" - ">
                    <img src="{{ asset('pfp/ShuJiii.jpg') }}" alt="Jiii">
                    <p> Lorem ipsum dolor sit amet. </p>
                </div>
                <div class="bubble user" data-is="You - 5:17">
                    <p> Lorem ipsum dolor sit amet. </p>
                    <img src="{{ asset('pfp/Shiyuu.jpg') }}" alt="Shu">
                </div>
                <div class="bubble them" data-is=" - ">
                    <img src="{{ asset('pfp/ShuJiii.jpg') }}" alt="Jiii">
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing. </p>
                </div>
                <div class="bubble user" data-is="You - 5:29">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet odio quibusdam sapiente accusamus
                        dolorum.
                    </p>
                    <img src="{{ asset('pfp/Shiyuu.jpg') }}" alt="Shu">
                </div>
                <div class="bubble them" data-is="Them - 7:45">
                    <img src="{{ asset('pfp/ShuJiii.jpg') }}" alt="Jiii">
                    <p> Lorem ipsum dolor sit amet. </p>
                </div>
            </div>
            <form class="chat-form">
                <div class="container-inputs">
                    <div class="files-logo-cont">
                        <i class='bx bx-upload'></i>
                    </div>
                    <div class="group-inp">
                        <textarea name="" placeholder="Enter your message here" minlength="1" maxlength="250"></textarea>
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
    @include('site.layout.guest')
@endsection
