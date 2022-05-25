<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>helping</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
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

    </style>
</head>

<body>
    <button class="checkbox" role="switch" aria-checked="false"></button>
    <script>
        let checkbox = document.querySelector('.checkbox');

        checkbox.addEventListener('click', () => {
            if (checkbox.classList.contains('on')) {
                checkbox.setAttribute('aria-checked', 'false');
            } else {
                checkbox.setAttribute('aria-checked', 'true');
            }
            checkbox.classList.toggle('on');
        })
    </script>
</body>

</html>
