<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('id', 0)->first();

        if (!$post) {
            abort(404);
        }
        
        //return view('posts');
    }
}