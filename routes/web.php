<?php

use App\Livewire\Counter;
use App\Livewire\PostsPage;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class)->name('counter');
Route::get('/posts', PostsPage::class)->name('posts');
