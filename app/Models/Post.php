<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rezky Roesjda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod in iste aperiam assumenda doloribus ea quasi natus optio deserunt eligendi tempora ipsa inventore ut cupiditate, ipsam consequuntur debitis! Esse, voluptatem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rezky Roesjda",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptate quisquam dolorum iusto nostrum consequuntur delectus eum totam? Dolores a ratione quasi perferendis aut iure quae sit, nisi molestiae sint?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
