<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class)->name('counter');
