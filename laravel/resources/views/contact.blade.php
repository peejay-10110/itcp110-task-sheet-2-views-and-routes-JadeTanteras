@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="page-header">
    <span class="section-label">get in touch</span>
    <h1>Contact</h1>
    <p>say hello! ✦</p>
</div>

<main>

    <div style="display:grid; grid-template-columns:1fr 1.5fr; gap:2.5rem; align-items:start;">

        <div>
            <div class="card fade-up">
                <span class="section-label">reach me</span>
                <h2>Let's Connect</h2>
                <p>
                    Whether you have a question, want to collaborate on a project, or just want to say hi —
                    feel free to reach out! I'm always open to connecting with fellow students and developers.
                </p>
            </div>

            <div class="card fade-up delay-1">
                <div class="contact-info-item">
                    <div class="icon">📧</div>
                    <div>
                        <strong>Email</strong>
                        <span>kristynjade.tanteras@tup.edu.ph</span>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon">📍</div>
                    <div>
                        <strong>Location</strong>
                        <span>Philippines</span>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon">🎓</div>
                    <div>
                        <strong>Program</strong>
                        <span>BTVTED — ICT major in Computer Programming</span>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon">💼</div>
                    <div>
                        <strong>Open To</strong>
                        <span>Collaborations, Partnership</span>
                    </div>
                </div>
            </div>

            <div class="card fade-up delay-2" style="text-align:center; background:var(--pink); border-color:var(--dark); box-shadow:5px 5px 0 var(--dark); color:var(--white);">
                <div style="font-family:'Caveat',cursive; font-size:2rem; margin-bottom:0.3rem;">✦ always open ✦</div>
                <p style="font-size:0.8rem; opacity:0.9;">to new connections, opportunities, and conversations!</p>
            </div>
        </div>

        {{-- Form --}}
        <div class="card fade-up delay-1">
            <span class="section-label">send a message</span>
            <h2>Drop Me a Note</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    @foreach($errors->all() as $error)
                        <div>✗ {{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" style="margin-top:1rem;">
                @csrf

                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="your@email.com" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="What is this about?" required>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn" style="width:100%; text-align:center; font-size:0.75rem;">
                    Send Message ✉
                </button>
            </form>
        </div>

    </div>

</main>

@endsection
