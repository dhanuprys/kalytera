<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/', \App\Livewire\Feedback::class)->name('feedback');
Route::get('/feedback', \App\Livewire\Feedback::class)->name('feedback');
Route::get('/success', function () {
    return 'SUCCESS';
})->middleware('session.once:feedback_success')->name('feedback_success');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard\Home::class)->name('dashboard');

    Route::get('/logout', function () {
        Auth::logout();
        session()->invalidate();

        return redirect('/login');
    })->name('logout');
});