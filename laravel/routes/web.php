<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// ─── HOME ───
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// ─── PORTFOLIO PAGES ───
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/gallery', [PortfolioController::class, 'gallery'])->name('gallery');

// ─── CONTACT ───
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');

// ─── THANK YOU ───
Route::get('/thank-you', [PortfolioController::class, 'thanks'])->name('thanks');

// Total: 9 routes (well within the max of 10)
