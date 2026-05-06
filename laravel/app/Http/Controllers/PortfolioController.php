<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * View 1: Home / Landing Page
     */
    public function home()
    {
        return view('home');
    }

    /**
     * View 2: About Me
     */
    public function about()
    {
        return view('about');
    }

    /**
     * View 3: Education
     */
    public function education()
    {
        return view('education');
    }

    /**
     * View 4: Skills
     */
    public function skills()
    {
        return view('skills');
    }

    /**
     * View 5: Projects
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     * View 6: Gallery
     */
    public function gallery()
    {
        return view('gallery');
    }

    /**
     * View 7: Contact Form
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * POST: Handle Contact Form Submission
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|min:10',
        ]);

        // In a real deployment, you would send a notification/email here.
        // e.g.: Mail::to('kristynjade.tanteras@email.com')->send(new ContactMail($validated));

        return redirect()->route('thanks');
    }

    /**
     * View 8: Thank You Page (after form submit)
     */
    public function thanks()
    {
        return view('thanks');
    }
}
