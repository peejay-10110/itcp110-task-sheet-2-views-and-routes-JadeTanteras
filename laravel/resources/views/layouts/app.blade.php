<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kristyn Jade Tanteras') — Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>

<nav>
    <a href="{{ route('home') }}" class="logo">K<span>.</span>Tanteras</a>
    <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">Education</a></li>
        <li><a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">Skills</a></li>
        <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>

<div class="ticker">
    <span class="ticker-inner">
        &nbsp;✦ Kristyn Jade S. Tanteras &nbsp;✦ BTVTED — ICT Major in Computer Programming &nbsp;✦ Designer &nbsp;✦ Developer &nbsp;✦ Creative &nbsp;✦ Kristyn Jade S. Tanteras &nbsp;✦ BTVTED — ICT Major in Computer Programming &nbsp;✦ Designer &nbsp;✦ Developer &nbsp;✦ Creative &nbsp;
    </span>
</div>

@yield('content')

<footer>
    <span class="footer-name">Kristyn Jade S. Tanteras</span>
    <p>Bachelor in Technical Vocational Teacher Education in ICT major in Computer Programming</p>
    <br>
    <p>© {{ date('Y') }} &nbsp;·&nbsp; Made with ♡ &nbsp;·&nbsp; tanteras_cv</p>
</footer>

@stack('scripts')
</body>
</html>
