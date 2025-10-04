<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function show($page): View
    {
        // Define the markdown file path
        $path = resource_path("markdown/{$page}.md");

        // Check if file exists
        if (!File::exists($path)) {
            abort(404, 'Page not found.');
        }

        // Optionally cache the parsed content for performance
        $content = Cache::remember("markdown_{$page}", 60, function () use ($path) {
            $markdown = File::get($path);
            return Str::markdown($markdown);
        });

        return view('pages.markdown', compact('content'));
    }
}
