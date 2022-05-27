<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>helping</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .checkbox {
            width: 52px;
            height: 32px;
            padding: 4px;

            display: flex;
            align-items: center;

            background: #49454f;

            border: solid 2px #938f99;
            border-radius: 24px;

            transition: border-color 200ms, background-color 200ms;

            cursor: pointer;
        }

        .checkbox::before {
            content: "";
            display: inline-block;

            width: 16px;
            height: 16px;
            border-radius: 12px;

            background-color: #938f99;

            transition: width 200ms, height 200ms,
                transform 200ms, background-color 200ms;
        }

        .checkbox.on {
            background-color: #d0bcff;
            border-color: #d0bcff;
        }

        .checkbox.on::before {
            background-color: #381e72;
            width: 24px;
            height: 24px;
            transform: translateX(18px);
        }

        #nav-icon {
            width: 60px;
            height: 45px;
            position: relative;
            margin: 50px auto;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
            cursor: pointer;
        }

        #nav-icon span {
            display: block;
            position: absolute;
            height: 9px;
            width: 100%;
            background: #bbb;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .25s ease-in-out;
            -moz-transition: .25s ease-in-out;
            -o-transition: .25s ease-in-out;
            transition: .25s ease-in-out;
        }

        #nav-icon span:nth-child(1) {
            top: 0px;
        }

        #nav-icon span:nth-child(2),
        #nav-icon span:nth-child(3) {
            top: 18px;
        }

        #nav-icon span:nth-child(4) {
            top: 36px;
        }

        #nav-icon.open span:nth-child(1) {
            top: 18px;
            width: 0%;
            left: 50%;
        }

        #nav-icon.open span:nth-child(2) {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        #nav-icon.open span:nth-child(3) {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        #nav-icon.open span:nth-child(4) {
            top: 18px;
            width: 0%;
            left: 50%;
        }

    </style>
</head>

<body>
    <div class="elt">
        <button class="checkbox" role="switch" aria-checked="false"></button>
    </div>
    <div class="elt">
        <div id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="elt">
    </div>


    <script>
        let checkbox = document.querySelector('.checkbox');

        checkbox.addEventListener('click', () => {
            if (checkbox.classList.contains('on')) {
                checkbox.setAttribute('aria-checked', 'false');
            } else {
                checkbox.setAttribute('aria-checked', 'true');
            }
            checkbox.classList.toggle('on');
        });


        let hamburger = document.querySelector('#nav-icon');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
        });
    </script>
</body>

</html>
