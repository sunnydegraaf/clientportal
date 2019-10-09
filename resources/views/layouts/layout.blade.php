<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <title>@yield('title')</title>
</head>
<body class="has-background-light">

    @include('partials._nav')

    <div class="hero">
        <div class="hero-body">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials._footer')

</body>
</html>

