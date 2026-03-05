<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('checks');
})->name('checks');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/devices', function () {
    return view('devices');
})->name('devices');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/connections', function () {
    return view('connections');
})->name('connections');

Route::get('/login', function () {
    return 'Login page';
})->name('login');


/*
|--------------------------------------------------------------------------
| Language Save Route (AJAX)
|--------------------------------------------------------------------------
*/

