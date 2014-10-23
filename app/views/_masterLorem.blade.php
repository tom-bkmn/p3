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
        <a href="/generateUsers">Generate Users</a> 
        <h1>@yield('bodyContent_1')</h1>
        @yield('bodyContent_form')
        <h3>@yield('bodyContent_2')</h3>
    </div>
</body>
</html>
