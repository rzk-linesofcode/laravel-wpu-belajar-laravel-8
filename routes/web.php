<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
    '/',
    function () {
        $strHome = 'home';
        return view('home', [
            'active' => "$strHome",
            'title' => 'Home',
        ]);
    }
);

Route::get(
    '/about',
    function () {
        return view('about', [
            'active' => 'about',
            'title' => 'About',
            'name' => 'Rezky',
            'email' => 'rzk84.rezky@gmail.com',
            'image' => 'me.jpg',
        ]);
    }
);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
