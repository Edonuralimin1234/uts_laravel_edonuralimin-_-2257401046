<?php

use Illuminate\Support\Facades\Route;

// Halaman awal (Welcome)
Route::get('/', function () {
    return view('welcome');
});

// Halaman Register
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', function () {
    return redirect('/login');
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function () {
    return redirect('/home');
});

// Halaman Home
Route::get('/home', function () {
    $data = [
        'nim' => '2257401046',
        'name' => 'EDO NURALIMIN',
        'class' => 'MI22AB'
    ];
    return view('home', $data);
});

// Logout
Route::get('/logout', function () {
    return redirect('/');
});


Route::get('/', function () {
    return view('welcome');
});
