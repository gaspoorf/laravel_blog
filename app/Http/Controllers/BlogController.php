<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = file_get_contents('https://jsonplaceholder.typicode.com/posts');
        // dump($posts = json_decode($posts)); 
        
        return view('blog', [
            'posts' => json_decode($posts)
        ]);
    }



}
