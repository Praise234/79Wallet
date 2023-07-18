<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Include any common CSS or JavaScript files -->
</head>
<body>
    @yield('header')

    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>
