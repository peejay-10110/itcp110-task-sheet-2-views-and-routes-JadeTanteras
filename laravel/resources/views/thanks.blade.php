@extends('layouts.app')

@section('title', 'Thank You!')

@section('content')

<div class="page-header">
    <span class="section-label">message sent!</span>
    <h1>Thank You!</h1>
    <p>i'll be in touch ✦</p>
</div>

<main style="text-align:center; max-width:600px; margin:0 auto;">

    <div class="card fade-up" style="padding:3rem 2rem;">

        <div style="font-size:5rem; margin-bottom:1rem; animation:float 3s ease-in-out infinite;">💌</div>

        <span class="section-label">message received</span>
        <h2 style="font-size:2rem; margin-bottom:1rem;">Your message has been sent!</h2>

        <p style="margin-bottom:1.5rem;">
            Thank you for reaching out! I've received your message and will get back to you as soon as possible.
            In the meantime, feel free to explore more of my portfolio.
        </p>

        <hr class="divider">

        <div style="font-family:'Caveat',cursive; font-size:1.5rem; color:var(--pink); margin:1.5rem 0;">
            — Kristyn Jade S. Tanteras ✦
        </div>

        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('home') }}" class="btn">Back to Home</a>
            <a href="{{ route('projects') }}" class="btn btn-outline">View My Projects</a>
        </div>

    </div>

</main>

@endsection
