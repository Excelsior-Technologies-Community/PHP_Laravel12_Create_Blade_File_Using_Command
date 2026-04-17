<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// Home route
Route::get('/', function () {
    return view('home');
});

// Users page
Route::get('/users', function () {
    return view('users.index');
});

// Blade Preview Page
Route::get('/blade-preview', function () {

    $type = request('type'); // upload or preview

    $count = DB::table('downloads')->value('count') ?? 0;
    $files = DB::table('files')->get();

    return view('preview', compact('type', 'count', 'files'));
});
// Upload File
Route::post('/upload-file', function (Request $request) {

    $request->validate([
        'file' => 'required|file|mimes:pdf,txt,docx'
    ]);

    $file = $request->file('file');
    $filename = time() . '_' . $file->getClientOriginalName();

    $file->move(public_path('uploads'), $filename);

    DB::table('files')->insert([
        'filename' => $filename,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return back();
});

// Download Blade File + Count
Route::get('/download-blade', function () {

    $file = resource_path('views/preview.blade.php');

    if (DB::table('downloads')->exists()) {
        DB::table('downloads')->increment('count');
    } else {
        DB::table('downloads')->insert([
            'count' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    return response()->download($file);
});