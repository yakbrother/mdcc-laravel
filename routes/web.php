<?php

use App\Http\Controllers\ProfileController;
use App\Models\BlogPost;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/join', function () {
    return Inertia::render('Join');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/blog', function () {
    return Inertia::render('Blog', [
        'blog_posts' => BlogPost::latest()->get()
    ]);
});

Route::get('/blog/{blog_post:id}', function (BlogPost $blog_post) {
    return Inertia::render('ShowBlogPost', [
        'blog_post' => $blog_post
    ]);
})->name('blog_post.show');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
