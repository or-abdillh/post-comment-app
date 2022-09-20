<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index() {
        // Get all post with the comments
        $posts = Post::all();

        $data = [
            "posts" => $posts,
        ];
        return view('post.index', compact('data'));
    }

    public function getDetailPost($id) {
        // Get spesific post
        $post = Post::find($id);

        // Get all comments for this post
        $comments = $post->comments;

        $data = [
            "post" => $post,
            "comments" => $comments
        ];

        return view('post.detail', compact('data'));
    }
}
