@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">

    <div class="hero-image-wrap fade-up">
        <div class="polaroid float">
            <img src="{{ asset('images/profile.jpg') }}" alt="Kristyn Jade S. Tanteras" style="width:280px; height:320px; object-fit:cover;">
            <p class="caption">Kristyn Jade ✦</p>
        </div>

        <div style="position:absolute; top:-1rem; right:0.5rem; font-family:'Caveat',cursive; font-size:1rem; color:var(--pink); transform:rotate(8deg);">
            * teacher · dev · creative
        </div>
        <div style="position:absolute; bottom:0.5rem; left:0; font-family:'Space Mono',monospace; font-size:0.6rem; letter-spacing:2px; color:var(--pink-light); text-transform:uppercase; transform:rotate(-3deg);">
            @tanteras
        </div>
    </div>

    <div>
        <span class="section-label fade-up delay-1">Portfolio · 2026</span>

        <p class="hero-title fade-up delay-1">meet the&nbsp;</p>
        <h1 class="hero-name fade-up delay-2">
            Kristyn<br><em>Jade.</em>
        </h1>

        <p class="hero-desc fade-up delay-3">
            I'm <strong>Kristyn Jade S. Tanteras</strong> — a Computer Programming student at Technological University
            of the Philippines - Taguig with a interest in developing simple and practical software for users. Focused on
            applying classroom knowledge and learning new technologies to create and improved digital projects. Aims to
            strengthen skills as a full-stack developer and contribute to technology-based solutions for real-world problems.
        </p>

        <div class="hero-tags fade-up delay-3">
            <span class="tag">Adaptable</span>
            <span class="tag">Creative</span>
            <span class="tag">Passionate</span>
            <span class="tag">Optimistic</span>
        </div>

        <div class="hero-actions fade-up delay-4">
            <a href="{{ route('about') }}" class="btn">About Me</a>
            <a href="{{ route('contact') }}" class="btn btn-outline">Say Hello ✉</a>
        </div>
    </div>

</section>

<div style="background:var(--dark); padding:2rem; border-top:3px solid var(--pink); border-bottom:3px solid var(--pink);">
    <div style="max-width:1100px; margin:0 auto; display:grid; grid-template-columns:repeat(auto-fit, minmax(160px, 1fr)); gap:1.5rem; text-align:center;">
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2.5rem; font-style:italic; color:var(--pink-pale);">ICT</div>
            <div style="font-size:0.65rem; letter-spacing:2px; text-transform:uppercase; color:var(--pink-light);">Major</div>
        </div>
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2.5rem; font-style:italic; color:var(--pink-pale);">CP</div>
            <div style="font-size:0.65rem; letter-spacing:2px; text-transform:uppercase; color:var(--pink-light);">Developer</div>
        </div>
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2.5rem; font-style:italic; color:var(--pink-pale);">✦</div>
            <div style="font-size:0.65rem; letter-spacing:2px; text-transform:uppercase; color:var(--pink-light);">Creative & Passionate</div>
        </div>
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2.5rem; font-style:italic; color:var(--pink-pale);">EDU</div>
            <div style="font-size:0.65rem; letter-spacing:2px; text-transform:uppercase; color:var(--pink-light);">Educator at Heart</div>
        </div>
    </div>
</div>

<main>
    <div style="text-align:center; margin-bottom:3rem;">
        <span class="section-label">explore</span>
        <h2 style="font-family:'Playfair Display',serif; font-size:2.5rem; font-style:italic;">what's inside</h2>
    </div>

    <div class="grid-3">
        <a href="{{ route('about') }}" style="text-decoration:none;">
            <div class="card" style="text-align:center;">
                <div style="font-size:2.5rem; margin-bottom:0.5rem;">👋</div>
                <h2>About Me</h2>
                <p>Get to know who I am, what drives me, and the values I carry as both an educator and developer.</p>
            </div>
        </a>

        <a href="{{ route('education') }}" style="text-decoration:none;">
            <div class="card" style="text-align:center;">
                <div style="font-size:2.5rem; margin-bottom:0.5rem;">🎓</div>
                <h2>Education</h2>
                <p>My academic journey as a BTVTEd Student here in TUP-Taguig.</p>
            </div>
        </a>

        <a href="{{ route('skills') }}" style="text-decoration:none;">
            <div class="card" style="text-align:center;">
                <div style="font-size:2.5rem; margin-bottom:0.5rem;">💻</div>
                <h2>Skills</h2>
                <p>From developer to classroom teaching — a look at the tools and technologies I work with.</p>
            </div>
        </a>

        <a href="{{ route('projects') }}" style="text-decoration:none;">
            <div class="card" style="text-align:center;">
                <div style="font-size:2.5rem; margin-bottom:0.5rem;">🚀</div>
                <h2>Projects</h2>
                <p>Hands-on work I've built — web systems, apps, and academic projects that showcase my skills.</p>
            </div>
        </a>

        <a href="{{ route('gallery') }}" style="text-decoration:none;">
            <div class="card" style="text-align:center;">
                <div style="font-size:2.5rem; margin-bottom:0.5rem;">🎨</div>
                <h2>Gallery</h2>
                <p>A visual scrapbook of highlights, moments, and creative works from my student journey.</p>
            </div>
        </a>

        <a href="{{ route('contact') }}" style="text-decoration:none;">
            <div class="card" style="text-align:center;">
                <div style="font-size:2.5rem; margin-bottom:0.5rem;">✉️</div>
                <h2>Contact</h2>
                <p>Want to connect? Reach out for collaborations, inquiries, or just a friendly hello!</p>
            </div>
        </a>
    </div>
</main>

@endsection
