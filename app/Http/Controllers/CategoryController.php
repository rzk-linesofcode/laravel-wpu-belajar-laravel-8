<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        return view(
            'posts',
            [
                'title' => "Post By Category: $category->name",
                'posts' => $category->posts->load('author', 'category'),
            ]
        );
    }
}
