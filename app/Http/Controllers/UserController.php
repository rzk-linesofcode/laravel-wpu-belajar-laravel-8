<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('posts', [
            'active' => 'posts',
            'title' => "Posts By Author: $author->name",
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }
}
