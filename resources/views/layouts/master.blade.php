<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>@yield('page-title')</title>
@include('layout.meta.meta')
<!-- Tailwindcss -->
<link rel="stylesheet" href="{{mix('css/tailwind.css')}}">
<!-- Style Sheet -->
<link rel="stylesheet" href="{{mix('css/app.css')}}">
<!-- #BUG Must Call RTL Dynamicly -->
<link rel="stylesheet" href="{{mix('css/rtl.css')}}">
@yield('head-scripts')
</head>
    <body id="app">
        <header>
            @yield('header')
        </header>
        <main>
            @yield('main')
            @yield('aside')
        </main>
        <footer>
            @yield('footer')
        </footer>
        <script src="{{ mix('/js/app.js')}}" defer></script>
        @yield('footer-scripts')
    </body>
</html>