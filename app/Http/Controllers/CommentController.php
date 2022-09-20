<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    //
    public function createComment (Request $post) {
        // Get post by commentable_id
        $Post = Post::findOrFail( $post->commentable_id );
        
        // Create sample comment
        $comment = new Comment();
        $comment->body = $post->body;
        $comment->date = date('dd-m-y');

        // Save comment
        $Post->comments()->save($comment);

        // Redirect
        return redirect()->route('post.detail', $post->commentable_id)->with('Berhasil tambah komen yaa');
    }
}
