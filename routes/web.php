<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    return view('users.index');
});

Route::get('/blade-preview', [FileController::class, 'index']);
Route::post('/upload-file', [FileController::class, 'upload']);
Route::get('/download-blade', [FileController::class, 'downloadBlade']);
Route::delete('/delete-file/{id}', [FileController::class, 'deleteFile']);
Route::post('/create-blade', [FileController::class, 'createBlade']);