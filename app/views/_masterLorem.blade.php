<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>@yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/p3.css')}}">
</head>
<body>
    <div class="center">
        <h1>@yield('bodyContent_1')</h1>
        <h3>@yield('bodyContent_2')</h3>
    </div>
</body>
</html>
