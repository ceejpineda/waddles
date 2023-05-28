<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function show()
    {
        return view('user/{id}');
    }

    public function register()
    {
        return view('register');
    }

    public function create()
    {
        
    }
}