<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/project/{id}', [HomeController::class, 'show'])->name('project.show');

Route::post('/contact-send', [ContactController::class, 'store'])->name('contact.store');

Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return 'Cache cleared';
});