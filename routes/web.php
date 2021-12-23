<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('about', function () {
    return view('about');
})->name('about');



Route::get('anti-ragging-cell', function () {
    return view('anti-ragging-cell');
})->name('anti-ragging-cell');


Route::get('career', function () {
    return view('career');
})->name('career');

Route::get('course-details', function () {
    return view('course-details');
})->name('course-details');


Route::get('chancellors-message', function () {
    return view('chancellors-message');
})->name('chancellors-message');


Route::get('contact-us/', function () {
    return view('contact-us');
})->name('contact-us');


Route::get('dean-academics', function () {
    return view('dean-academics');
})->name('dean-academics');



Route::get('image-gallery', function () {
    return view('image-gallery');
})->name('image-gallery');


Route::get('index', function () {
    return view('index');
})->name('index');


Route::get('media-gallery', function () {
    return view('media-gallery');
})->name('media-gallery');


Route::get('mission-vission', function () {
    return view('mission-vission');
})->name('mission-vision');


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


Route::get('transport', function () {
    return view('transport');
})->name('transport');


Route::get('event-detail', function () {
    return view('event-detail');
})->name('event-detail');
