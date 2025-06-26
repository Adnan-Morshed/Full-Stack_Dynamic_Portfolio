<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/projects', function () {
    return view('projects');
});