<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::post('/registrations', [FormController::class, 'store'])->name('registrations.store');
