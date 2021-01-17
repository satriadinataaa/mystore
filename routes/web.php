<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('Pegawai')->namespace('Pegawai')->middleware('pegawai')->group(function(){
    Route::get('dashboard', 'DashboardController@index')->name('pegawai-dashboard');
});

Route::prefix('Manager')->namespace('Manager')->middleware('manager')->group(function(){
    Route::get('dashboard', 'DashboardController@index')->name('manager-dashboard');
});

require __DIR__.'/auth.php';
