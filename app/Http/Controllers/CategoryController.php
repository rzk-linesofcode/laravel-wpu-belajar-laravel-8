<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $category)
    {
        return view('categories', [
            'active' => 'categories',
            'title' => 'Categories',
            'categories' => $category->all()
        ]);
    }

    public function show(Category $category)
    {
        return view(
            'posts',
            [
                'active' => 'posts',
                'title' => "Post By Category: $category->name",
                'posts' => $category->posts->load('author', 'category'),
            ]
        );
    }
}
