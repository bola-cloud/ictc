<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\MainBannerController;
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
Route::group([
    'prefix' => LaravelLocalization::setLocale(), // Set the language prefix correctly
], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/about', function () {
        return view('front.about');
    })->name('about');

    Route::get('/services', function () {
        return view('front.services');
    })->name('services');

    Route::get('/our-partners', function () {
        return view('front.partners');
    })->name('partners');

    Route::get('/news-details/{id}', [\App\Http\Controllers\HomeController::class, 'newsDetails'])->name('news-details');
    Route::get('/image-gallery', [\App\Http\Controllers\GalleryController::class, 'index'])->name('image-gallery');
    Route::get('/media-details/{id}', [\App\Http\Controllers\GalleryController::class, 'mediaDetails'])->name('media-details');
    Route::get('/video-gallery', [\App\Http\Controllers\GalleryController::class, 'videoGallery'])->name('video-gallery');
    Route::get('/latest-news', [\App\Http\Controllers\HomeController::class,'latestNews'])->name('latest.news');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');

});

Route::group([
    'prefix' => LaravelLocalization::setLocale(), // Set the language prefix correctly
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ]
], function () {
    Route::get('/admin', [\App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('dashboard');
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class)->names('admin.galleries');
    Route::prefix('galleries/{gallery}')->name('admin.gallery_images.')->group(function () {
        Route::get('images', [GalleryImageController::class, 'index'])->name('index');
        Route::get('images/create', [GalleryImageController::class, 'create'])->name('create');
        Route::post('images', [GalleryImageController::class, 'store'])->name('store');
        Route::get('images/{image}/edit', [GalleryImageController::class, 'edit'])->name('edit');
        Route::put('images/{image}', [GalleryImageController::class, 'update'])->name('update');
        Route::delete('images/{image}', [GalleryImageController::class, 'destroy'])->name('destroy');
    });
    Route::resource('news', NewsController::class)->names('admin.news');
    Route::resource('main_banners', MainBannerController::class)->names('admin.main_banners');
});
