<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | MyWebsite</title>

    {{-- External CSS --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/button-menu.css">
    <link rel="stylesheet" href="/css/button-sidebar-menu.css">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat+Alternates&display=swap"
        rel="stylesheet">
    {{-- CDN Bootstrap 5.2.3 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- For style CSS every page --}}
    @yield('styleCSS')
</head>

<body>
    @include('partials.header')
    @include('partials.sidebarMenu')

    <div class="container-md">
        @yield('content')
    </div>

    @include('partials.footer')

    {{-- CDN Bootstrap 5.2.3 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Navbar --}}
    <script src="/js/navbar.js"></script>
    {{-- For TypeWriter --}}
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="/js/typewriter.js"></script>
    {{-- Skills Container --}}
    <script src="/js/skillsContainer.js"></script>
</body>

</html>
