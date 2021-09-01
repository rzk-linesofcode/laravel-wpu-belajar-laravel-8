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
}
