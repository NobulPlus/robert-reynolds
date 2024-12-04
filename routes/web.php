<?php

use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Front\ServiceController;
use Illuminate\Support\Facades\Route;

// Main Pages
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about-us', [MainController::class, 'about'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact');
Route::get('/recruitment', [MainController::class, 'recruitment'])->name('recruitment');
Route::get('/our-stories', [MainController::class, 'stories'])->name('stories');
Route::get('/policy', [MainController::class, 'policy'])->name('policy');

// Services Routes
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index'); // Overview of all services
    Route::get('/consultancy', [ServiceController::class, 'consultancy'])->name('consultancy');
    Route::get('/solution', [ServiceController::class, 'solution'])->name('solution');
    Route::get('/outsourcing', [ServiceController::class, 'outsourcing'])->name('outsourcing');
    Route::get('/organization', [ServiceController::class, 'organization'])->name('organization');
    Route::get('/performance', [ServiceController::class, 'performance'])->name('performance');
    Route::get('/industrial', [ServiceController::class, 'industrial'])->name('industrial');
    Route::get('/mainstreaming', [ServiceController::class, 'mainstreaming'])->name('mainstreaming');
    Route::get('/equality', [ServiceController::class, 'equality'])->name('equality');
    Route::get('/process', [ServiceController::class, 'process'])->name('process');
    Route::get('/talent', [ServiceController::class, 'talent'])->name('talent');
    Route::get('/business', [ServiceController::class, 'business'])->name('business');
    Route::get('/training', [ServiceController::class, 'training'])->name('training');
});
