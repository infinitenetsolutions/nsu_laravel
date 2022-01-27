<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplyOnlineController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GetStartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/main-index', [IndexController::class, 'main_index'])->name('main-index');
Route::get('student/{name}', [StudentController::class, 'index'])->name('student');
Route::get('infrastructure/{name}', [StructureController::class, 'index'])->name('infrastructure');
Route::get('about/{name}', [AboutController::class, 'index'])->name('about');
Route::get('about/faculty/{name}', [AboutController::class, 'faculty'])->name('faculty');
Route::get('about/faculty/faculty-details/{id}', [AboutController::class, 'faculty_details'])->name('faculty-details');
Route::get('about/government/body', [AboutController::class, 'govbody'])->name('govbody');
Route::get('course/{course}/{id}', [CourseController::class, 'index'])->name('course');
Route::get('admission/{name}', [ApplyOnlineController::class, 'index'])->name('admission');
Route::get('contact/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactUsController::class, 'contact'])->name('contact-us');
Route::get('career/career', [CareerController::class, 'index'])->name('career');
Route::post('career/applied', [CareerController::class, 'store'])->name('career_applied');
Route::get('placements/{name}', [PlacementController::class, 'index'])->name('placement');
Route::get('placement/appointment', [PlacementController::class, 'appointment'])->name('appointment');
Route::get('placement/requiters', [PlacementController::class, 'requiters'])->name('requiters');
Route::get('placement/contact', [PlacementController::class, 'placement_contact'])->name('placement-contact');
// for getting the data from  placement contact form
Route::post('placement/contact', [PlacementController::class, 'contact'])->name('placement.contact');

Route::get('news/latestnews/{id}', [LatestNewsController::class, 'index'])->name('news');
Route::get('events/event/{id}', [EventController::class, 'index'])->name('event');
Route::get('noticeboard/notice/{id}', [NoticeBoardController::class, 'index'])->name('noticeboard');
Route::get('program/schools-and-institutes/{name}', [CourseController::class, 'program'])->name('program');
Route::get('image-gallery', [GalleryController::class, 'image_gallery'])->name('image-gallery');
Route::get('media-gallery', [GalleryController::class, 'media_gallery'])->name('media-gallery');
Route::post('getstart', [GetStartController::class, 'store'])->name('getstart');
