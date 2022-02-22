<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getlocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    @yield('js')
</body>
</html>