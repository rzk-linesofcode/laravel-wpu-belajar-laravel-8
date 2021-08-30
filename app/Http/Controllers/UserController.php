<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('user', [
            'title' => $author->name,
            'posts' => $author->posts,
            'author' => $author->name,
        ]);
    }
}
