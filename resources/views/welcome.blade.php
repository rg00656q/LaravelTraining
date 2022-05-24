<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Guillaume Romero, Self taught">
    <title>Ma page d'accueil</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    @include('site.layout.icons')
</head>

<body>
    <div class="content">
        @include('site.layout.sidebar')
        <div class="home_content">
            @yield('content')
        </div>
        <div class="precision">
            @yield('precision')
        </div>
    </div>
</body>

</html>
