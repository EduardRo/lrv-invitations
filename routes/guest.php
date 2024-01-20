<?php

/** Guest routes */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\GuestController;

Route::get('guest/dashboard', [GuestController::class, 'dashboard'])->middleware(['auth', 'role:guest'])->name('guest.dashboard');
