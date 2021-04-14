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
    return view('auth.login');
});

Route::get('/verification', function () {
    return view('verification.verification');
});

Route::get('/article', function () {
    return view('article.article');
});

Route::get('/home', function () {
    return view('home.home');
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

Route::get('/live', function () {
    return view('live.live');
});

Route::get('/raffle', function () {
    return view('raffle.raffle');
});

Route::get('/thankyou', function () {
    return view('thankyou.thankyou');
});

Route::get('/products', function () {
    return view('products.products');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
