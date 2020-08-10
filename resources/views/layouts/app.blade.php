<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes._header')
        @include('includes._styles')
    </head>
    <body>
        @yield('content')
        @include('includes._footer')
        @include('includes._scripts')
    </body>
</html>
