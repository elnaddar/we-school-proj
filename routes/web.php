<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\PostsPage;
use App\Livewire\PostUpdate;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    Route::middleware("role:admin")->get('/counter', Counter::class)->name('counter');

    Route::get('/', PostsPage::class)->name('home');
    Route::middleware("permission:update post")->get('/post/{post}/edit', PostUpdate::class)->name("post.edit");

    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route("login");
    })->name('logout');
});
Route::middleware("guest")->group(function () {
    Route::get("/login", Login::class)->name("login");
    Route::get("/register", Register::class)->name("register");
});
