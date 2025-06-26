<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/resume.blade.php', function () {
    return view('resume');
});
Route::get('/projects.blade.php', function () {
    return view('projects');
});