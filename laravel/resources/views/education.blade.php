@extends('layouts.app')

@section('title', 'Education')

@section('content')

<div class="page-header">
    <span class="section-label">academic journey</span>
    <h1>Education</h1>
    <p>my path in learning ✦</p>
</div>

<main>

    <div style="display:grid; grid-template-columns:2fr 1fr; gap:2.5rem; align-items:start;">

        <div>
            <div class="card fade-up">
                <span class="section-label">current</span>
                <h2>Formal Education</h2>

                <div class="timeline-item" style="margin-top:1.5rem;">
                    <span class="year">2024 — Present</span>
                    <h3>Bachelor of Technical Vocational Teacher Education</h3>
                    <p style="color:var(--pink); font-size:0.8rem; font-weight:700; margin:0.2rem 0;">Major in Computer Programming</p>
                    <p>Specialization in Information and Communications Technology (ICT)</p>
                    <div style="margin-top:0.5rem;">
                        <span class="tag">BTVTED</span>
                        <span class="tag">ICT</span>
                        <span class="tag">Computer Programming</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <span class="year">2022 — 2024</span>
                    <h3>Senior High School</h3>
                    <p>Moreh Academy</p>
                    <p>Technical Vocational Livelihood (TVL) Track — ICT Strand</p>
                    <div style="margin-top:0.5rem;">
                        <span class="tag">TVL Track</span>
                        <span class="tag">ICT Strand</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <span class="year">2018 — 2022</span>
                    <h3>Junior High School</h3>
                    <p>Moreh Academy</p>
                </div>

                <div class="timeline-item">
                    <span class="year">2012 — 2018</span>
                    <h3>Elementary</h3>
                    <p>Silangan Elementary School</p>
                </div>
            </div>

            <div class="card fade-up delay-1">
                <span class="section-label">relevant coursework</span>
                <h2>Subjects & Training</h2>
                <div style="display:flex; flex-wrap:wrap; gap:0.4rem; margin-top:0.8rem;">
                    <span class="tag">Computer Programming 1 & 2</span>
                    <span class="tag">Information Management</span>
                    <span class="tag">Introduction to Computing</span>
                    <span class="tag">Introduction to Web Development</span>
                    <span class="tag">IT Elective 1 & 2</span>
                    <span class="tag">Logic and Digital Circuit</span>

                </div>
            </div>
        </div>

        <div>
            <div class="card fade-up delay-2" style="background:var(--dark); color:var(--white); border-color:var(--pink); box-shadow:6px 6px 0 var(--pink-light);">
                <span class="section-label" style="color:var(--pink-light);">program</span>
                <h2 style="color:var(--pink-pale);">BTVTED</h2>
                <p style="color:var(--pink-light); font-size:0.8rem; line-height:1.8;">
                    The Bachelor of Technical Vocational Teacher Education prepares future educators to teach
                    technical and vocational subjects in K–12 and post-secondary institutions across the Philippines.
                </p>
            </div>

            <div class="card fade-up delay-3">
                <span class="section-label">specialization</span>
                <h2>ICT Track</h2>
                <p style="font-size:0.8rem; line-height:1.8;">
                    Focus on computer programming, digital literacy, web development, and preparing students
                    for real-world technology careers.
                </p>
            </div>

            <div class="card fade-up delay-4" style="text-align:center;">
                <div style="font-family:'Playfair Display',serif; font-size:4rem; font-style:italic; color:var(--pink); line-height:1;">ICT</div>
                <p style="font-size:0.7rem; text-transform:uppercase; letter-spacing:2px; color:var(--gray);">Major in Computer Programming</p>
                <hr class="divider">
                <p style="font-size:0.8rem;">Future-ready educator bridging technology and classroom learning.</p>
            </div>

            <a href="{{ route('skills') }}" class="btn" style="width:100%; text-align:center; display:block;">View My Skills →</a>
        </div>
    </div>

</main>

@endsection
