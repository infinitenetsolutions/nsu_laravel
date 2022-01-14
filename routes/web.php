<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplyOnlineController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index'])->name('index');


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
Route::get('news/latestnews/{id}', [LatestNewsController::class, 'index'])->name('news');
Route::get('events/event/{id}', [EventController::class, 'index'])->name('event');
Route::get('noticeboard/notice/{id}', [NoticeBoardController::class, 'index'])->name('noticeboard');







Route::get('chancellors-message', function () {
    return view('chancellors-message');
})->name('chancellors-message');




Route::get('dean-academics', function () {
    return view('dean-academics');
})->name('dean-academics');



Route::get('image-gallery', [GalleryController::class, 'image_gallery'])->name('image-gallery');
Route::get('media-gallery', [GalleryController::class, 'media_gallery'])->name('media-gallery');






Route::get('mission-vission', function () {
    return view('mission-vission');
})->name('mission-vission');


Route::get('placements', function () {
    return view('placements');
})->name('placements');


Route::get('proctor', function () {
    return view('proctor');
})->name('proctor');


Route::get('profile-of-faculty-members', function () {
    return view('profile-of-faculty-members');
})->name('profile-of-faculty-members');


Route::get('profile-of-faculty-members-details', function () {
    return view('profile-of-faculty-members-details');
})->name('profile-of-faculty-members-details');


Route::get('registrars-message', function () {
    return view('registrars-message');
})->name('registrars-message');


Route::get('vice-chancellors-message', function () {
    return view('vice-chancellors-message');
})->name('vice-chancellors-message');


Route::get('library', function () {
    return view('library');
})->name('library');

Route::get('it-infrastructure', function () {
    return view('it-infrastructure');
})->name('it-infrastructure');

Route::get('class-room', function () {
    return view('class-room');
})->name('class-room');


Route::get('laboratory', function () {
    return view('laboratory');
})->name('laboratory');


Route::get('accommodation', function () {
    return view('accommodation');
})->name('accommodation');

Route::get('auditorium', function () {
    return view('auditorium');
})->name('auditorium');

Route::get('canteen', function () {
    return view('canteen');
})->name('canteen');


Route::get('transport', function () {
    return view('transport');
})->name('transport');

Route::get('sports', function () {
    return view('sports');
})->name('sports');

Route::get('conference-room', function () {
    return view('conference-room');
})->name('conference-room');

Route::get('moot-court', function () {
    return view('moot-court');
})->name('moot-court');


Route::get('traning-kitchen', function () {
    return view('traning-kitchen');
})->name('traning-kitchen');


Route::get('fitness-center', function () {
    return view('fitness-center');
})->name('fitness-center');


Route::get('mass-comm-studio', function () {
    return view('mass-comm-studio');
})->name('mass-comm-studio');

Route::get('trans', function () {
    return view('transport');
});
