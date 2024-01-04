<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth:web'])->group(function(){
    //Route::prefix('/admin')->group(function(){

        Route::get('/play', [\App\Http\Controllers\PlayController::class,'index'])->name('play');
        Route::resource('snippet', \App\Http\Controllers\SnippetController::class);

        Volt::route('/note', 'note-table')->name('note.index');

   //});
});

require __DIR__.'/auth.php';
