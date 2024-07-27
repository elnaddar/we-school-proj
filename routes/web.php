<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\PostsPage;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    Route::get('/counter', Counter::class)->name('counter');
    Route::get('/posts', PostsPage::class)->name('posts');
});
Route::middleware("guest")->group(function () {
    Route::get("/login", Login::class)->name("login");
    Route::get("/register", Register::class)->name("register");
});
