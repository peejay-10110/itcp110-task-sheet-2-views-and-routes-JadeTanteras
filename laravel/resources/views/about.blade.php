@extends('layouts.app')

@section('title', 'About Me')

@section('content')

<div class="page-header">
    <span class="section-label">get to know me</span>
    <h1>About <em>Me</em></h1>
    <p>hello! i'm kristyn jade ✦</p>
</div>

<main>
    <div style="display:grid; grid-template-columns:1fr 2fr; gap:2.5rem; align-items:start;">

        <div>
            <div class="polaroid" style="margin:0 auto; display:block; max-width:260px;">
                <img src="{{ asset('images/profile.jpg') }}" alt="Kristyn Jade" style="width:100%; height:280px; object-fit:cover;">
                <p class="caption">K. Tanteras ✦</p>
            </div>

            <div class="card" style="margin-top:1.5rem; text-align:center;">
                <h2 style="font-size:1.2rem; margin-bottom:0.3rem;">Kristyn Jade S. Tanteras</h2>
                <p style="color:var(--pink); font-size:0.75rem; text-transform:uppercase; letter-spacing:1px; margin-bottom:1rem;">BTVTED · ICT · Computer Programming</p>
                <div>
                    <span class="tag">Adaptable</span>
                    <span class="tag">Creative</span>
                    <span class="tag">Passionate</span>
                    <span class="tag">Optimistic</span>
                </div>
            </div>
        </div>

        <div>
            <div class="card fade-up">
                <span class="section-label">introduction</span>
                <h2>Hello, I'm Kristyn! 👋</h2>
                <p>
                    I'm a dedicated student pursuing a <strong>Bachelor's in Technical Vocational Education (BTVTED)</strong>,
                    specializing in Information and Communications Technology with a major in Computer Programming.
                    My passion lies at the intersection of education and technology — I believe that good teaching and good code
                    share the same foundation: clarity, purpose, and care.
                </p>
            </div>

            <div class="card fade-up delay-1">
                <span class="section-label">my story</span>
                <h2>Who I Am</h2>
                <p>
                    I am someone who finds joy in both the classroom and the code editor. As a future Teacher in ICT,
                    I am committed to equipping the next generation with the digital skills they need to thrive in
                    a fast-changing world. Whether I'm debugging a application or preparing a lesson plan,
                    I bring the same level of focus and enthusiasm.
                </p>
                <br>
                <p>
                    I'm hands-on, detail-oriented, and always eager to learn. I believe that technology should be
                    accessible to everyone, and I strive to make that a reality through education and creative problem-solving.
                </p>
            </div>

            <div class="card fade-up delay-2">
                <span class="section-label">values</span>
                <h2>What I Stand For</h2>
                <div class="grid-2" style="gap:1rem; margin-top:0.5rem;">
                    <div style="padding:1rem; background:var(--pink-pale); border:2px solid var(--pink);">
                        <strong style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1px; color:var(--pink); display:block; margin-bottom:0.3rem;">💡 Lifelong Learning</strong>
                        <p style="font-size:0.78rem;">I believe education never stops. Every day is a chance to grow, improve, and discover something new.</p>
                    </div>
                    <div style="padding:1rem; background:var(--pink-pale); border:2px solid var(--pink);">
                        <strong style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1px; color:var(--pink); display:block; margin-bottom:0.3rem;">🤝 Community First</strong>
                        <p style="font-size:0.78rem;">Teaching is a form of service. I put my students and community at the center of everything I do.</p>
                    </div>
                    <div style="padding:1rem; background:var(--pink-pale); border:2px solid var(--pink);">
                        <strong style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1px; color:var(--pink); display:block; margin-bottom:0.3rem;">🎨 Creative Thinking</strong>
                        <p style="font-size:0.78rem;">I approach problems — whether technical or educational — with creativity and an open mind.</p>
                    </div>
                    <div style="padding:1rem; background:var(--pink-pale); border:2px solid var(--pink);">
                        <strong style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1px; color:var(--pink); display:block; margin-bottom:0.3rem;">✨ Excellence</strong>
                        <p style="font-size:0.78rem;">I hold myself to a high standard — in academic work, in projects, and in how I treat others.</p>
                    </div>
                </div>
            </div>

            <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                <a href="{{ route('education') }}" class="btn">My Education →</a>
                <a href="{{ route('skills') }}" class="btn btn-outline">My Skills →</a>
            </div>
        </div>
    </div>
</main>

@endsection
