<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = file_get_contents('https://jsonplaceholder.typicode.com/users/'.$id);
       
        return view('user', [
            'user' => json_decode($user),
        ]);
       
    }

}
