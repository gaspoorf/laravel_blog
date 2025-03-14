<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = file_get_contents('https://jsonplaceholder.typicode.com/users');
        
        return view('users', [
            'users' => json_decode($users)
        ]);

    }
}
