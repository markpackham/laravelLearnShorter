<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/basicLaravelSite/public/css/app.css">
</head>
<body>
@include('inc.navbar')
<div class="container">

    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-log-8">
            @include('inc.messages')
            @yield('content', 'Default Content')
        </div>
        <div class="col-md-4 col-log-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>
<footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; Some company</p>
</footer>
</body>
</html>