<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // kebalikan dari fillable, jadi selain id boleh diinput secara bulk 
    // menggunakan Post::create 
    protected $guarded = ['id'];
}
