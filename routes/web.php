<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//tambahkan kode berikut
Route::resource('students', StudentController::class);