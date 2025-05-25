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

    Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

    Route::get('/our-work', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');

    Route::get('/our-partners', [\App\Http\Controllers\PartnersController::class, 'index'])->name('partners');

    Route::get('/news-details/{id}', [\App\Http\Controllers\HomeController::class, 'newsDetails'])->name('news-details');
    Route::get('/image-gallery', [\App\Http\Controllers\GalleryController::class, 'index'])->name('image-gallery');
    Route::get('/media-details/{id}', [\App\Http\Controllers\GalleryController::class, 'mediaDetails'])->name('media-details');
    Route::get('/video-gallery', [\App\Http\Controllers\GalleryController::class, 'videoGallery'])->name('video-gallery');
    Route::get('/latest-news', [\App\Http\Controllers\HomeController::class,'latestNews'])->name('latest.news');
    Route::post('/contact', [\App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');
    Route::get('scopes/{id}/projects', [App\Http\Controllers\HomeController::class, 'showScopeProjects'])->name('scope.projects');
    Route::get('all/projects', [App\Http\Controllers\HomeController::class, 'allProjects'])->name('all-projects');
    Route::get('/scope/{slug}', [App\Http\Controllers\ServiceController::class, 'showProjects'])->name('frontend.scope.show');
    Route::get('/work-withus', [\App\Http\Controllers\WorkWithUsController::class,'index'])->name('work-withus');
    Route::get('/work-with-us/employment-opportunities', [\App\Http\Controllers\WorkWithUsController::class,'employment'])->name('work-withus.employment');
    Route::get('/work-with-us/employment-opportunities/express-interest', [\App\Http\Controllers\WorkWithUsController::class,'employInterest'])->name('work-withus.employment.interest');
    Route::post('/work-with-us/express-interest', [\App\Http\Controllers\WorkWithUsController::class,'submitExpressInterest'])->name('work-withus.express-interest');

    Route::get('/work-with-us/internship', [\App\Http\Controllers\WorkWithUsController::class,'internship'])->name('work-withus.internship');
    Route::get('/work-with-us/internships/express-interest', [\App\Http\Controllers\WorkWithUsController::class, 'internshipInterest'])->name('work-withus.internship.interest');
    Route::post('/work-with-us/submit-internship-interest', [\App\Http\Controllers\WorkWithUsController::class, 'submitInternshipInterest'])->name('work-withus.internship.submit');

    Route::get('/work-with-us/consultancy', [\App\Http\Controllers\WorkWithUsController::class,'consultancy'])->name('work-withus.consultancy');
    Route::get('/work-with-us/consultancies/express-interest', [\App\Http\Controllers\WorkWithUsController::class, 'consultancyInterest'])->name('work-withus.consultancy.interest');
    Route::post('/work-with-us/submit-consultancy-interest', [\App\Http\Controllers\WorkWithUsController::class, 'submitConsultancyInterest'])->name('work-withus.consultancy.submit');

    Route::get('/work-with-us/job-vacancies', [\App\Http\Controllers\WorkWithUsController::class, 'showJobs'])->name('frontend.jobs.index');
    Route::get('/work-with-us/consultancy-vacancies', [\App\Http\Controllers\WorkWithUsController::class, 'showConsultancies'])->name('frontend.consultancies.index');
    Route::get('/work-with-us/internship-vacancies', [\App\Http\Controllers\WorkWithUsController::class, 'showInternships'])->name('frontend.internships.index');

    Route::get('/project-details/{scopeSlug}/{projectSlug}', [App\Http\Controllers\ProjectController::class, 'show'])
    ->name('frontend.project.show');


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
        'admin', // Apply the admin middleware
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
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names('admin.users');
    Route::resource('admin/partners', \App\Http\Controllers\Admin\PartnerController::class)->names('admin.partners');
    Route::resource('scopes', \App\Http\Controllers\Admin\ScopeAdminController::class)->names('admin.scopes');
    Route::resource('messages', \App\Http\Controllers\Admin\MessageAdminController::class)->names('admin.messages');
    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('scopes/{id}/projects', [App\Http\Controllers\Admin\ProjectAdminController::class, 'show'])->name('admin.scopes.show');
        Route::get('scopes/{id}/projects/create', [App\Http\Controllers\Admin\ProjectAdminController::class, 'create'])->name('admin.projects.create');
        Route::post('scopes/{id}/projects/store', [App\Http\Controllers\Admin\ProjectAdminController::class, 'save'])->name('admin.projects.store');
        Route::resource('projects', App\Http\Controllers\Admin\ProjectAdminController::class)->except(['create', 'show','store'])->names('admin.projects');
    });
    Route::resource('/admin/services', App\Http\Controllers\Admin\ServiceController::class)->names('admin.services');
    Route::resource('/partner_categories', App\Http\Controllers\Admin\PartnerCategoryController::class)->names('admin.partner_categories');
    Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('/settings/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.settings.update');
    Route::resource('/team_sections', \App\Http\Controllers\Admin\TeamSectionController::class)->names('admin.team_sections');
    Route::resource('/team-members', \App\Http\Controllers\Admin\TeamMemberController::class)->names('admin.team_members');
    Route::prefix('admin/interests')->name('admin.interests.')->group(function () {
        // Job Interests
        Route::get('/jobs', [\App\Http\Controllers\Admin\EmploymentInterestController::class, 'listJobInterests'])->name('jobs.index');
        Route::get('/jobs/export', [\App\Http\Controllers\Admin\EmploymentInterestController::class, 'exportJobInterests'])->name('jobs.export');

        // Consultancy Interests
        Route::get('/consultancies', [\App\Http\Controllers\Admin\EmploymentInterestController::class, 'listConsultancyInterests'])->name('consultancies.index');
        Route::get('/consultancies/export', [\App\Http\Controllers\Admin\EmploymentInterestController::class, 'exportConsultancyInterests'])->name('consultancies.export');

        // Internship Interests
        Route::get('/internships', [\App\Http\Controllers\Admin\EmploymentInterestController::class, 'listInternshipInterests'])->name('internships.index');
        Route::get('/internships/export', [\App\Http\Controllers\Admin\EmploymentInterestController::class, 'exportInternshipInterests'])->name('internships.export');
    });

    Route::resource('jobs', \App\Http\Controllers\Admin\JobVacancyController::class)->names('admin.jobs');
    Route::resource('consultancy', \App\Http\Controllers\Admin\ConsultancyVacancyController::class)->names('admin.consultancies');
    Route::resource('internships', \App\Http\Controllers\Admin\InternshipVacancyController::class)->names('admin.internships');
});
