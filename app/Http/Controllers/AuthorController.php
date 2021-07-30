<?php

namespace App\Http\Controllers;

use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {

    }

    public function get(User $author)
    {
        return view('posts', [
            'title' => 'Post by Author: ' . $author->name,
            'posts' => $author->post->load('category', 'author'),
        ]);
    }
}
