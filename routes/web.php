<?php

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

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/image-gallery', function () {
    return view('front.image-gallery');
})->name('image-gallery');

Route::get('/media-details', function () {
    return view('front.media-details');
})->name('media-details');

Route::get('/video-gallery', function () {
    return view('front.video-gallery');
})->name('video-gallery');

Route::get('/services', function () {
    return view('front.services');
})->name('services');

Route::get('/our-partners', function () {
    return view('front.partners');
})->name('partners');

Route::get('/news-details', function () {
    return view('front.news-details');
})->name('news-details');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');