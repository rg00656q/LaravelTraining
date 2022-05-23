<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <title>Blog Template for Bootstrap</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('css/blog.css') }}">
</head>

<body>
    <div class="container">
        @include('layouts.nav')
    </div>
    <main role="main" class="container">
        <div class="row">
            @yield('content')
        </div><!-- /.row -->
    </main><!-- /.container -->
    @include('layouts.footer')
</body>

</html>
