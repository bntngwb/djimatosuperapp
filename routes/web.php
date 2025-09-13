<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    // Jika user sudah login, langsung redirect ke dashboard
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('welcome'); // ✅ perbaiki agar namanya welcome

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // file dashboard kamu
    })->name('dashboard');

    Route::get('/page1', fn() => view('page1'))->name('page1');
    Route::get('/page2', fn() => view('page2'))->name('page2');
    Route::get('/page3', fn() => view('page3'))->name('page3');
    Route::get('/page4', fn() => view('page4'))->name('page4');
    Route::get('/page5', fn() => view('page5'))->name('page5');
    Route::get('/page6', fn() => view('page6'))->name('page6');
    Route::get('/page7', fn() => view('page7'))->name('page7');
    Route::get('/page8', fn() => view('page8'))->name('page8');
});

require __DIR__.'/auth.php';
