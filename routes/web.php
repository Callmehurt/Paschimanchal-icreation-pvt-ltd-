<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\EventAndNewsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WorkPlaceController;
use App\Http\Controllers\Admin\CompanyDetailController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ApplicationController;

use App\Http\Controllers\Frontend\SiteController;


//frontend routes
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/our-services', [SiteController::class, 'services'])->name('site.services');
Route::get('/our-services/{id}', [SiteController::class, 'single_service'])->name('site.single.service');
Route::get('/our-portfolio', [SiteController::class, 'portfolio'])->name('site.portfolio');
Route::get('/our-projects/{id}', [SiteController::class, 'single_project'])->name('site.single.project');
Route::get('/news-events', [SiteController::class, 'news_and_events'])->name('site.news.event');
Route::get('/news-events/{id}', [SiteController::class, 'single_ne'])->name('site.single.news.event');
Route::get('/case-study', [SiteController::class, 'case_study'])->name('site.blogs');
Route::get('/case-study/{id}', [SiteController::class, 'single_case_study'])->name('site.single.blog');
Route::get('/about-us', [SiteController::class, 'about_page'])->name('site.about.us');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/career', [SiteController::class, 'career'])->name('site.career');
Route::get('/single-career/{id}', [SiteController::class, 'single_career'])->name('site.single.career');
Route::get('/application/form/{id}', [SiteController::class, 'application_page'])->name('site.application.page');







//backend routes
Route::get('/admin', function () {
    return view('auth/login');
});

Route::get('/dashboard', [HomeController::class, 'dashboard']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::post('/add/blog', [BlogController::class, 'store'])->name('add.blog');
Route::put('/update/blog/{id}', [BlogController::class, 'update'])->name('update.blog');
Route::post('/update/blog/{blog}', [BlogController::class, 'destroy'])->name('delete.blog');


//team page routes
Route::get('/manage/team', [TeamController::class, 'index'])->name('manage.team');
Route::post('/add/team', [TeamController::class, 'store'])->name('add.team');
Route::put('/update/team/{team}', [TeamController::class, 'update'])->name('update.team');
Route::post('/delete/team/{team}', [TeamController::class, 'destroy'])->name('delete.team');


//work place routes
Route::get('/manage/work-place', [WorkPlaceController::class, 'index'])->name('manage.work-place');
Route::post('/add/work-place', [WorkPlaceController::class, 'store'])->name('add.work-place');
Route::put('/add/work-place/{workplace}', [WorkPlaceController::class, 'update'])->name('update.work-place');
Route::post('/delete/work-place/{work_place}', [WorkPlaceController::class, 'destroy'])->name('delete.work-place');


//client page routes

Route::get('/client', [ClientController::class, 'index'])->name('clients');
Route::post('/add/client/', [ClientController::class, 'store'])->name('add.client');
Route::put('/update/client/{client}', [ClientController::class, 'update'])->name('update.client');
Route::post('/delete/client/{client}', [ClientController::class, 'destroy'])->name('delete.client');



//project page routes
Route::get('/project', [ProjectController::class, 'index'])->name('projects');
Route::get('/manage-project', [ProjectController::class, 'manage_project'])->name('manage-project');
Route::post('/add/project', [ProjectController::class, 'store'])->name('add.project');
Route::put('/update/project/{project}', [ProjectController::class, 'update'])->name('update.project');
Route::post('/delete/project/{project}', [ProjectController::class, 'destroy'])->name('delete.project');


//service page routes
Route::get('/service', [ServiceController::class, 'index'])->name('services');
Route::get('/manage-service', [ServiceController::class, 'manage_service'])->name('manage.services');
Route::post('/add/service', [ServiceController::class, 'store'])->name('add.service');
Route::post('/delete/service/{service}', [ServiceController::class, 'destroy'])->name('delete.service');
Route::put('/update/service/{service}', [ServiceController::class, 'update'])->name('update.service');


//news and events
Route::get('/news-event', [EventAndNewsController::class, 'index'])->name('news.events');
Route::post('/add-news-event', [EventAndNewsController::class, 'store'])->name('add.news.events');
Route::post('/delete-news-event/{newsAndEvent}', [EventAndNewsController::class, 'destroy'])->name('delete.news.events');
Route::put('/update-news-event/{newsAndEvent}', [EventAndNewsController::class, 'update'])->name('update.events');
Route::get('/news-event/{id}', [EventAndNewsController::class, 'manage_photo'])->name('show.photo');

//gallery routes
Route::get('/news-and-events', [GalleryController::class, 'index'])->name('load.event.page');
Route::post('/upload', [GalleryController::class, 'store'])->name('upload.photo');
Route::post('/delete-news-and-events/{gallery}', [GalleryController::class, 'destroy'])->name('remove.photo');
Route::put('/update-news-and-events/{id}', [GalleryController::class, 'update'])->name('update.photo');


//company detail page routes
Route::get('/company/details', [CompanyDetailController::class, 'index'])->name('manage.details');
Route::put('/company/details/update/{id}', [CompanyDetailController::class, 'update'])->name('update.details');


//job page routes
Route::get('/post/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/manage/jobs', [JobController::class, 'manage_job'])->name('manage.jobs');
Route::post('/add/jobs', [JobController::class, 'store'])->name('add.job');
Route::post('/delete/jobs/{job}', [JobController::class, 'destroy'])->name('delete.job');
Route::put('/update/jobs/{job}', [JobController::class, 'update'])->name('update.job');


//application routes
Route::post('/apply', [ApplicationController::class, 'store'])->name('apply');
Route::get('/view/application/{application}', [ApplicationController::class, 'index'])->name('view.application');
Route::post('/delete/application/{application}', [ApplicationController::class, 'destroy'])->name('delete.application');
Route::get('/download/cv/{id}', [ApplicationController::class, 'view_cv'])->name('download.cv');
