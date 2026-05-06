@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="page-header">
    <span class="section-label">my work</span>
    <h1>Projects</h1>
    <p>things i've built ✦</p>
</div>

<main>

    <div class="card fade-up" style="margin-bottom:2rem;">
        <span class="section-label">overview</span>
        <h2>What I've Built</h2>
        <p>
            These are projects I've developed as part of my academic coursework and personal learning.
            Each project reflects my growth as a developer and future ICT educator — built with real technologies
            and real-world applications in mind.
        </p>
    </div>

    <div class="grid-2">

        <div class="project-card fade-up delay-1">
            <div class="project-num">01</div>
            <h3>Curriculum Vitae and Portfolio Website</h3>
            <p style="font-size:0.8rem; color:var(--gray); line-height:1.8; margin:0.5rem 0 1rem;">
                A personal portfolio built with Laravel, showcasing academic background, technical skills,
                and projects. And Curriculum Vitae with Flutter.
            </p>
            <div style="margin-bottom:1rem;">
                <span class="tag">Laravel</span>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">Blade</span>
            </div>
            <span class="tag" style="background:var(--dark); color:var(--white); border-color:var(--dark);">✦ This Project</span>
        </div>

        <div class="project-card fade-up delay-2">
            <div class="project-num">02</div>
            <h3>Car Rental Application</h3>
            <p style="font-size:0.8rem; color:var(--gray); line-height:1.8; margin:0.5rem 0 1rem;">
                A web-based system and an application for renting cars. Includes admin
                authentication, CRUD operations, and printable receipt.
            </p>
            <div>
                <span class="tag">Flutter</span>
                <span class="tag">MySQL</span>
                <span class="tag">Bootstrap</span>
                <span class="tag">CRUD</span>
            </div>
        </div>

        <div class="project-card fade-up delay-3">
            <div class="project-num">03</div>
            <h3>Event Management System</h3>
            <p style="font-size:0.8rem; color:var(--gray); line-height:1.8; margin:0.5rem 0 1rem;">
                A web-based event management system for TUP-T students. Contains creating event,
                registration for participants, and event tracker.
            </p>
            <div>
                <span class="tag">HTML</span>
                <span class="tag">CSS</span>
                <span class="tag">JavaScript</span>
                <span class="tag">Firebase</span>
            </div>
        </div>

        <div class="project-card fade-up delay-4">
            <div class="project-num">04</div>
            <h3>Movie Ticketing System</h3>
            <p style="font-size:0.8rem; color:var(--gray); line-height:1.8; margin:0.5rem 0 1rem;">
                A movie ticketing system where customers can pick and buy ticket to the movies they want to watch. A system
                also for admins that can create or add movies, edit, view, and delete movies.
            </p>
            <div>
                <span class="tag">Java</span>
                <span class="tag">JSON</span>
            </div>
        </div>

    </div>

    <div style="text-align:center; margin-top:2rem;">
        <a href="{{ route('contact') }}" class="btn">Interested? Let's Connect ✉</a>
    </div>

</main>

@endsection
