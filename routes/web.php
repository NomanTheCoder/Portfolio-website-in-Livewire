<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/register',Register::class);
Route::get('/login',Login::class);
Route::get('/dashboard',Dashboard::class);
