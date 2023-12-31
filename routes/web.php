<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/file', function () {
    return view('file');
});


Route::post('/file', [FileController::class, 'upload']);

Route::get('/show', [FileController::class, 'showImages'])->name('show');