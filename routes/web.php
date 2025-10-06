<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']) ->name('students.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard', function () {
    return 'hello, CasdeVierta';
});

Route::get('/Blog/{Pengembangan Marketing UMKM Berbasis Digital}', function ($name = 'Guest') {
    return  "Edukasi, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['tema' => 'Pengembangan Marketing UMKM Berbasis Digital']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman home';
})->name('home.page');

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);