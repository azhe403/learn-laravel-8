<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function get(Category $category)
    {
        return view('posts', [
            'title' => "Post by Category: " . $category->name,
            'posts' => $category->posts->load('category', 'author'),
            'category' => $category->name
        ]);
    }
}
