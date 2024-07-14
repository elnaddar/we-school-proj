<?php

use App\Livewire\Counter;
use App\Livewire\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class)->name('counter');
Route::get('/posts', Posts::class)->name('posts');
