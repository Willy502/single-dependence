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
    return view('home');
})->name('home');

Route::get('/agency', function () {
    return view('agency');
})->name('agency');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/lash&brow/terms', 'LashTermsController@index')->name('lash_terms');

Route::post('/send-mail', 'ContactController@contact');
