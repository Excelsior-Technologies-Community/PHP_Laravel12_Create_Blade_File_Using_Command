<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeBlade extends Command
{
    protected $signature = 'make:blade {name}';
    protected $description = 'Create a new blade file';

    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path('views/' . str_replace('.', '/', $name) . '.blade.php');

        if (File::exists($path)) {
            $this->error("Blade file already exists!");
            return;
        }

        $directory = dirname($path);
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true);

        File::put($path, "<!-- New Blade File: $name -->");

        $this->info("Blade file created successfully: $path");
    }
}