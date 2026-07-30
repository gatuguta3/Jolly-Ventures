<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});


Route::get('/about', function () {
    return view('pages.aboutpage');
});


Route::get('/contactus', function () {
    return view('pages.contactuspage');
});

Route::get('/services', function () {
    return view('pages.servicespage');
});

Route::get('/catering', function () {
    return view('pages.all-services.catering-page');
});

Route::get('/events_planning', function () {
    return view('pages.all-services.event-page');
});

Route::get('/equipment_solutions', function () {
    return view('pages.all-services.equipment-page');
});

Route::get('/decor_services', function () {
    return view('pages.all-services.decor-page');
});



