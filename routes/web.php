<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', action: \App\Livewire\Home::class)->name('home');
Route::get('/about', action: \App\Livewire\About::class)->name('about');
Route::get('/contact', action: \App\Livewire\Contact::class)->name('contact');
Route::get('/posts', action: \App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/users/{user}', action: App\Livewire\Users\Show::class)->name('users.show');
