<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name("home");

Route::get('/experience', function () {
    return Inertia::render('Experience');
})->name("experience");

Route::get('/projects', function () {
    return Inertia::render('Projects/Index');
})->name("projects.index");

Route::get('/projects/detail', function () {
    return Inertia::render('Projects/Show');
})->name("projects.show");
