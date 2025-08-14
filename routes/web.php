<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Users\Index;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', action: \App\Livewire\Home::class)->name('home');
    Route::get('/about', action: \App\Livewire\About::class)->name('about');
    Route::get('/contact', action: \App\Livewire\Contact::class)->name('contact');
    Route::get('/timeline', action: \App\Livewire\Timeline::class)->name('timeline');
    Route::get('/users/{user}', action: App\Livewire\Users\Show::class)->name('users.show');
    Route::get('/users', action: Index::class)->name('users.index');
});

Route::get('/login', action: App\Livewire\Login::class)->name('login')->middleware('guest');

Route::post('/logout', LogoutController::class)->name('logout');
