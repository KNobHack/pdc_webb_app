<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::view('/dashboard', 'dashboard.dashboard');
