<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $category)
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => $category->all()
        ]);
    }

    public function show(Category $category)
    {
        return view(
            'category',
            [
                'title' => $category->name,
                'posts' => $category->posts,
                'category' => $category->name
            ]
        );
    }
}
