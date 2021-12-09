<!doctype html>
<html>

<head>
    @include('includes.header')
</head>

<body>
    <header class="row1">
        @include('includes.head')
    </header>
    <div id="main" class="row1">
        @yield('content')
    </div>
    <footer class="row1">
        @include('includes.footer')
    </footer>
</body>

</html>
