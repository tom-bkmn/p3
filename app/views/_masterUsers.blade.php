<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>@yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/p3.css')}}">
</head>
<body>
    <div class="center">
        <a href="/">Home</a> 
        <a href="/loremTool">Lorem Generator</a> 
        <h2>@yield('bodyContent_1')</h2>
        <h2>@yield('bodyContent_2')</h2>
        <p>@yield('bodyContent_3')</p>
    </div>
</body>
</html>
