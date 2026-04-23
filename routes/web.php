<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/periode', function () {
    return view('periode');
});

Route::get('/controller', function () {
    return view('controller');
});

Route::get('/view', function () {
    return view('view');
});

Route::resource('fakultas', FakultasController::class);