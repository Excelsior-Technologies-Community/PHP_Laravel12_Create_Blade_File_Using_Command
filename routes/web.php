<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Home route
Route::get('/', function () {
return view('home');
});


// Users page route
Route::get('/users', function () {
return view('users.index');
});