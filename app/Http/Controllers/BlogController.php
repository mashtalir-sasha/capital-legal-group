<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.main', [
            'blogCategory' => \App\Models\BlogCategory::get(),
            'content' => \App\Models\Blog::get(),
        ]);
    }

    public function category($slug)
    {
        return view('blog.category', [
            'blogCategory' => \App\Models\BlogCategory::get(),
            'category' => \App\Models\BlogCategory::where('slug', $slug)->with('articles')->firstOrFail(),
        ]);
    }
}
