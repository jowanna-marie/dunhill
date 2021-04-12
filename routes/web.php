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
    return view('index.index');
});

Route::get('/verification', function () {
    return view('verification.verification');
});

Route::get('/about', function () {
    return view('aboutus.aboutus');
});

Route::get('/dashboarddunhill', function () {
    return view('dashboarddunhill.dashboarddunhill');
});

Route::get('/graph', function () {
    return view('graph.graph');
});

Route::get('/members', function () {
    return view('members.member');
});

Route::get('/survey', function () {
    return view('survey.survey');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
