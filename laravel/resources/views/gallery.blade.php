@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

<div class="page-header">
    <span class="section-label">visual scrapbook</span>
    <h1>Gallery</h1>
    <p>moments & highlights ✦</p>
</div>

<main>

    <div class="card fade-up" style="text-align:center; margin-bottom:2rem;">
        <span class="section-label">welcome</span>
        <h2>My Creative Space</h2>
        <p>
            This is where my hobbies show and display.
        </p>
    </div>

    <div style="display:flex; justify-content:center; margin-bottom:3rem;" class="fade-up delay-1">
        <div class="polaroid" style="max-width:320px;">
            <img src="{{ asset('images/painting.jpg') }}" alt="Kristyn Jade" style="width:100%; height:360px; object-fit:cover;">
            <p class="caption">Kristyn Jade S. Tanteras ✦ 2026</p>
        </div>
    </div>

    <div class="grid-3 fade-up delay-2">

        <div style="background:var(--white); border:3px solid var(--dark); box-shadow:4px 4px 0 var(--pink); padding:1.5rem; text-align:center;">
            <div style="font-size:3rem; margin-bottom:0.5rem;">🎓</div>
            <h3 style="font-family:'Playfair Display',serif; font-style:italic; font-size:1.1rem; margin-bottom:0.3rem;">Arts & Creativity</h3>
            <p style="font-size:0.78rem; color:var(--gray);">Painting</p>
            <p style="font-size:0.78rem; color:var(--gray);">Traditional Arts</p>
            <p style="font-size:0.78rem; color:var(--gray);">Digital Arts</p>
            <p style="font-size:0.78rem; color:var(--gray);">Crafting</p>
            <p style="font-size:0.78rem; color:var(--gray);">Designing Clothes</p>
            <p style="font-size:0.78rem; color:var(--gray);">Dressmaking</p>
        </div>

        <div style="background:var(--pink-pale); border:3px solid var(--dark); box-shadow:4px 4px 0 var(--pink); padding:1.5rem; text-align:center;">
            <div style="font-size:3rem; margin-bottom:0.5rem;">💻</div>
            <h3 style="font-family:'Playfair Display',serif; font-style:italic; font-size:1.1rem; margin-bottom:0.3rem;">Entertainment</h3>
            <p style="font-size:0.78rem; color:var(--gray);">Watching Movies</p>
            <p style="font-size:0.78rem; color:var(--gray);">Reading stories</p>
            <p style="font-size:0.78rem; color:var(--gray);">Writing stories</p>
            <p style="font-size:0.78rem; color:var(--gray);">Listening to music</p>
        </div>

        <div style="background:var(--white); border:3px solid var(--dark); box-shadow:4px 4px 0 var(--pink); padding:1.5rem; text-align:center;">
            <div style="font-size:3rem; margin-bottom:0.5rem;">👩‍🏫</div>
            <h3 style="font-family:'Playfair Display',serif; font-style:italic; font-size:1.1rem; margin-bottom:0.3rem;">Sports</h3>
            <p style="font-size:0.78rem; color:var(--gray);">Badminton</p>
            <p style="font-size:0.78rem; color:var(--gray);">Volleyball</p>
        </div>

    </div>

    <div class="card fade-up delay-3" style="margin-top:2rem; text-align:center; background:var(--dark); color:var(--white); border-color:var(--pink); box-shadow:6px 6px 0 var(--pink-light);">
        <div style="font-family:'Playfair Display',serif; font-size:2rem; font-style:italic; color:var(--pink-pale); line-height:1.4;">
            "Do something that your future self will thank you for."
        </div>
        <p style="margin-top:1rem; font-size:0.7rem; letter-spacing:2px; text-transform:uppercase; color:var(--pink-light);">— Motto -</p>
    </div>

</main>

@endsection
