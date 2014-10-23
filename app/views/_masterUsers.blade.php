<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
            "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>@yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/p3.css')}}">
</head>
<body>
    <div class="center">
        <a href="/">Home</a> 
        <a href="/loremTool">Lorem Generator</a> 
        <h2>@yield('bodyContent_1')</h2>
        @yield('bodyContent_2')
        <p>@yield('bodyContent_3')</p>
    </div>
</body>
</html>
