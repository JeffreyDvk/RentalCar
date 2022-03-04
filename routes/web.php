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

Route::get('/Park', function () {
    return view('park', ['park' => "active"]);
});
Route::get('/Locations', function () {
    return view('locations', ['locations' => "active"]);
})->middleware(['auth'])->name('dashboard');
Route::get('/Profile', function () {
    return view('profile', ['profile' => "active"]);
});
Route::get('/Statistiques', function () {
    return view('statistiques', ['statistiques' => "active"]);
})->middleware(['auth'])->name('dashboard');
Route::get('/', function () {
    return view('home', ['home' => "active"]);
});
require __DIR__.'/auth.php';
