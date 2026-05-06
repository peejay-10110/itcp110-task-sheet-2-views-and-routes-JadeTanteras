@extends('layouts.app')

@section('title', 'Skills')

@section('content')

<div class="page-header">
    <span class="section-label">tools & expertise</span>
    <h1>Skills</h1>
    <p>what i bring to the table ✦</p>
</div>

<main>

    <div class="grid-2">

        <div>
            <div class="card fade-up">
                <span class="section-label">technical</span>
                <h2>Programming & Dev</h2>

                <div class="skill-item">
                    <div class="skill-name"><span>PHP / Laravel</span><span>50%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:50%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>HTML & CSS</span><span>90%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:90%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>JavaScript</span><span>70%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:70%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>Flutter & Dart</span><span>70%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:70%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>MySQL / Database</span><span>90%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:90%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>Bootstrap</span><span>78%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:78%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>Git & Version Control</span><span>90%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:90%"></div></div>
                </div>
            </div>

            <div class="card fade-up delay-1">
                <span class="section-label">tools</span>
                <h2>Software & Platforms</h2>
                <div style="display:flex; flex-wrap:wrap; gap:0.4rem;">
                    <span class="tag">VS Code</span>
                    <span class="tag">PhpStorm</span>
                    <span class="tag">Laravel Herd</span>
                    <span class="tag">MySQL Workbench</span>
                    <span class="tag">Figma</span>
                    <span class="tag">Canva</span>
                    <span class="tag">Microsoft Office</span>
                    <span class="tag">GitHub</span>
                    <span class="tag">Postman</span>
                    <span class="tag">XAMPP</span>
                </div>
            </div>
        </div>

        <div>
            <div class="card fade-up delay-1">
                <span class="section-label">education</span>
                <h2>Teaching Skills</h2>

                <div class="skill-item">
                    <div class="skill-name"><span>Lesson Planning</span><span>80%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:80%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>Classroom Management</span><span>70%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:70%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>TLE Teaching</span><span>70%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:70%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>Curriculum Development</span><span>65%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:65%"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-name"><span>Assessment & Evaluation</span><span>80%</span></div>
                    <div class="skill-bar"><div class="skill-fill" style="width:80%"></div></div>
                </div>
            </div>

            <div class="card fade-up delay-2">
                <span class="section-label">soft skills</span>
                <h2>Personal Strengths</h2>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.8rem; margin-top:0.5rem;">
                    <div style="padding:0.8rem; background:var(--pink-pale); border:2px solid var(--pink); text-align:center; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; color:var(--pink);">
                        🗣 Communication
                    </div>
                    <div style="padding:0.8rem; background:var(--pink-pale); border:2px solid var(--pink); text-align:center; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; color:var(--pink);">
                        🧩 Problem Solving
                    </div>
                    <div style="padding:0.8rem; background:var(--pink-pale); border:2px solid var(--pink); text-align:center; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; color:var(--pink);">
                        👥 Teamwork
                    </div>
                    <div style="padding:0.8rem; background:var(--pink-pale); border:2px solid var(--pink); text-align:center; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; color:var(--pink);">
                        ⏰ Time Management
                    </div>
                    <div style="padding:0.8rem; background:var(--pink-pale); border:2px solid var(--pink); text-align:center; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; color:var(--pink);">
                        🎯 Adaptability
                    </div>
                    <div style="padding:0.8rem; background:var(--pink-pale); border:2px solid var(--pink); text-align:center; font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:1px; color:var(--pink);">
                        💡 Creativity
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card fade-up delay-3" style="margin-top:1.5rem; text-align:center;">
        <span class="section-label">languages</span>
        <h2>Communication</h2>
        <div style="display:flex; justify-content:center; gap:3rem; flex-wrap:wrap; margin-top:1rem;">
            <div>
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-style:italic; color:var(--pink);">Filipino</div>
                <span class="tag">Native</span>
            </div>
            <div>
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-style:italic; color:var(--pink);">English</div>
                <span class="tag">Proficient</span>
            </div>
        </div>
    </div>

</main>

@endsection
