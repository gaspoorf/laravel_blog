<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;

class PostController extends Controller
{
    public function read($id)
    {
        $post = file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$id);
        $postComments = file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$id.'/comments');
       
        $comments = Comment::where('postId', $id)->get();

        return view('post', [
            'post' => json_decode($post),
            'comments' => json_decode($comments)
        ]);
       
    }

}
