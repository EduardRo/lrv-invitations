<?php

/** Receiver routes */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ReceiverController;

Route::get('receiver/dashboard', [ReceiverController::class, 'dashboard'])->middleware(['auth', 'role:receiver'])->name('receiver.dashboard');
