<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//para ang admin ray maka access 
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/courses', CourseController::class);
    Route::resource('admin/lessons', LessonController::class);
});

// Example of commented-out routes for languages
// Route::resource('languages', LanguageController::class);
// Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
// Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');
// Route::get('/languages/{language}', [LanguageController::class, 'show'])->name('languages.show');
// Route::put('/languages/{language}', [LanguageController::class, 'update'])->name('languages.update');
// Route::delete('/languages/{language}', [LanguageController::class, 'destroy'])->name('languages.destroy');
