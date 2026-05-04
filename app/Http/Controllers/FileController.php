<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class FileController extends Controller
{
    public function index()
    {
        $type = request('type', 'preview');
        $count = DB::table('downloads')->value('count') ?? 0;
        $files = File::latest()->get();

        return view('preview', compact('type', 'count', 'files'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,txt,docx,php|max:2048'
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        File::create(['filename' => $filename]);

        return back()->with('success', 'File uploaded!');
    }

    public function downloadBlade()
    {
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
    }

    public function deleteFile($id)
    {
        $file = File::findOrFail($id);
        $path = public_path('uploads/' . $file->filename);

        if (file_exists($path)) {
            unlink($path);
        }

        $file->delete();
        return back()->with('success', 'File deleted!');
    }

    public function createBlade(Request $request)
    {
        $name = $request->blade_name;
        Artisan::call("make:view $name");
        
        return back()->with('success', "Blade file '$name' created successfully!");
    }
}