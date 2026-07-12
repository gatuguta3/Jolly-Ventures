<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.homepage');
});

Route::get('/about-us', function () {
    return view('website.about_us');
});

Route::get('/gallery', function () {
    return view('website.gallery');
});

Route::get('/contact-us', function () {
    return view('website.contact_us');
});
